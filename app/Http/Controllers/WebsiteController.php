<?php

namespace App\Http\Controllers;

use App\Entities\PageEntity;
use App\Entities\PageType;
use App\Entities\Page;
use Illuminate\Http\Request;
use App\Entities\PageEntityGallery;
use function PHPSTORM_META\map;


class WebsiteController extends Controller
{
    /**
     * Get Pages structure
     *
     * @return mixed
     */
    public function pages(){

        $pages = Page::get()->toHierarchy();

        return $pages;
    }


    public function globalRequest (Request $request){

        $one = array();
        $many = array();

        $index = -1;
        foreach ($request->input('global') as $key => $value){
            $pageType = PageType::with(['entities' => function ($query) use ($value) {
                $query->orderBy('order', 'desc');
                $query->select(['id', 'slugable', 'type_id']);
                if($value['limit'] != "all"){
                    $query->limit($value['limit']);
                }

            }, 'entities.collections' => function ($query) {
                $query->select(['entity_id','value', 'field_name', 'field_type', 'field_id']);
            }])->where('slug' , $value['type'])->get(['id', 'name', 'type', 'slug']);


            foreach ($pageType as $key => $value){

                if ($value->type == "one") {
                    $coll = $value->entities[0]->collections;

                    $formPost = $coll->reduce(function ($formPost, $coll) {
                        if($coll['field_type'] == "gallery"){
                            $gallery = PageEntityGallery::with(['images' => function ($query) {
                                $query->orderBy('order', 'desc');
                            }])->where('field_id', $coll['field_id'])->where('entity_id', $coll['entity_id'])->first();
                            $formPost[$coll['field_name']] = $gallery->images;
                            return $formPost;
                        }
                        $formPost[$coll['field_name']] = $coll['value'];
                        return $formPost;
                    }, []);

                    $one[0][$value->slug] = ["id" => $value->entities[0]->id, "slugable" =>$value->entities[0]->slugable, "collections" => $formPost];
                }else {
                    $index += 1;
                    $newObject = array($value->slug => []);
                    array_push($many, $newObject);
                    foreach ($value->entities as $entity) {
                        $coll = $entity->collections;

                        $formPost = $coll->reduce(function ($formPost, $coll) {
                            if($coll['field_type'] == "gallery"){
                                $gallery = PageEntityGallery::with(['images' => function ($query) {
                                    $query->orderBy('order', 'desc');
                                }])->where('field_id', $coll['field_id'])->where('entity_id', $coll['entity_id'])->first();
                                $formPost[$coll['field_name']] = $gallery->images;
                                return $formPost;
                            }
                            $formPost[$coll['field_name']] = $coll['value'];
                            return $formPost;
                        }, []);

                        array_push($many[$index][$value->slug], ["id" => $entity->id, "slugable" => $entity->slugable, "collections" => $formPost]);


                    }
                }
            }

        }

        $global = array(
            "one" => $one,
            "many" =>$many
        );



        return array("global" => $global);
    }

    /**
     * Get Modules for an Page
     *
     * @param $slug
     * @return array
     */
    public function modules($slug){

        $one = array();
        $many = array();

        $page = Page::where('slug', $slug)->first();

        $pageType = PageType::with(['entities' => function ($query) {
            $query->orderBy('order', 'desc');
            $query->select(['id', 'slugable', 'type_id']);
        }, 'entities.collections' => function ($query) {
            $query->select(['entity_id','value', 'field_name', 'field_type', 'field_id']);
        }])->where('page_id' , $page->id)->get(['id', 'name', 'type', 'slug']);

        $index = -1;
        foreach ($pageType as $key => $value){

            if($value->entities != null && $value->type == 'one') {

                $coll = $value->entities[0]->collections;

                $formPost = $coll->reduce(function ($formPost, $coll) {
                    if($coll['field_type'] == "gallery"){
                        $gallery = PageEntityGallery::with(['images' => function ($query) {
                            $query->orderBy('order', 'desc');
                        }])->where('field_id', $coll['field_id'])->where('entity_id', $coll['entity_id'])->first();
                        $formPost[$coll['field_name']] = $gallery->images;
                        return $formPost;
                    }
                    $formPost[$coll['field_name']] = $coll['value'];
                    return $formPost;
                }, []);

                $one[$value->slug] = ["collections" => $formPost];
            }else if($value->entities != [] && $value->type = "many"){
                $index += 1;
                $newObject  = array($value->slug => []);
                array_push($many, $newObject);
                foreach ($value->entities as $entity){



                    $coll = $entity->collections;
//
                    $formPost = $coll->reduce(function ($formPost, $coll) {

                        $formPost[$coll['field_name']] = $coll['value'];
                        return $formPost;
                    }, []);


//
                    array_push($many[$index][$value->slug], ["id" => $entity->id, "slugable" =>$entity->slugable, "collections" => $formPost]);


                }

            }

        }

        return array("one" => $one, "many" => $many);
    }

    /*
     * Find Module By Id
     */
    public function moduleById($id, $slug){

        $entityID = array(
            "entity" => []
        );
        $entity = PageEntity::with('collections')->find($id);

        $coll = $entity->collections;

        $formPost = $coll->reduce(function ($formPost, $coll) {
            if($coll['field_type'] == "gallery"){
                $gallery = PageEntityGallery::with(['images' => function ($query) {
                    $query->orderBy('order', 'desc');
                }])->where('field_id', $coll['field_id'])->where('entity_id', $coll['entity_id'])->first();
                $formPost[$coll['field_name']] = $gallery->images;
                return $formPost;
            }
            $formPost[$coll['field_name']] = $coll['value'];
            return $formPost;
        }, []);

        array_push($entityID['entity'], ["id" => $entity->id, "slugable" =>$entity->slugable, "collections" => $formPost]);


        return $entityID;
    }

    public function bladePageRedirect($slug){

        $one = array();
        $many = array();
        $page = Page::where('slug', $slug)->first();
        $pageType = PageType::with(['entities' => function ($query) {
            $query->orderBy('order', 'desc');
            $query->select(['id', 'slugable', 'type_id']);
        }, 'entities.collections' => function ($query) {
            $query->select(['entity_id','value', 'field_name', 'field_type', 'field_id']);
        }])->where('page_id' , $page->id)->get(['id', 'name', 'type', 'slug']);
        $index = -1;
        foreach ($pageType as $key => $value){
            if($value->entities != null && $value->type == "one") {
                if(isset($value->entities[0])) {
                    $coll = $value->entities[0]->collections;
                    $formPost = $coll->reduce(function ($formPost, $coll) {
                        if ($coll['field_type'] == "gallery") {
                            $gallery = PageEntityGallery::with(['images' => function ($query) {
                                $query->orderBy('order', 'desc');
                            }])->where('field_id', $coll['field_id'])->where('entity_id', $coll['entity_id'])->first();
                            $formPost[$coll['field_name']] = $gallery->images;
                            return $formPost;
                        }
                        $formPost[$coll['field_name']] = $coll['value'];
                        return $formPost;
                    }, []);
                    $one[$value->slug] = ["collections" => $formPost];
                }
            }else if($value->entities != [] && $value->type = "many"){
                $index += 1;
                $newObject  = array($value->slug => []);
                array_push($many, $newObject);
                foreach ($value->entities as $entity){



                    $coll = $entity->collections;
//
                    $formPost = $coll->reduce(function ($formPost, $coll) {
                        $formPost[$coll['field_name']] = $coll['value'];
                        return $formPost;
                    }, []);
//
                    array_push($many[$index][$value->slug], ["id" => $entity->id, "slugable" =>$entity->slugable, "collections" => $formPost]);
                }
            }
        }

        return view('pages.'.$slug, array('one' => $one, 'many' => $many));
    }

    public function bladePageDetails($slug, $id, $slugable){
        $entityID = array(
            "entity" => []
        );
        $entity = PageEntity::with('collections')->find($id);
        $coll = $entity->collections;
        $formPost = $coll->reduce(function ($formPost, $coll) {
            if($coll['field_type'] == "gallery"){
                $gallery = PageEntityGallery::with(['images' => function ($query) {
                    $query->orderBy('order', 'desc');
                }])->where('field_id', $coll['field_id'])->where('entity_id', $coll['entity_id'])->first();
                $formPost[$coll['field_name']] = $gallery->images;
                return $formPost;
            }
            $formPost[$coll['field_name']] = $coll['value'];
            return $formPost;
        }, []);
        array_push($entityID['entity'], ["id" => $entity->id, "slugable" =>$entity->slugable, "collections" => $formPost]);

        return view('innerpages.'.$slug, array('entity' => $entityID['entity']));
    }
}