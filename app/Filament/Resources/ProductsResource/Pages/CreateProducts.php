<?php

namespace App\Filament\Resources\ProductsResource\Pages;

use App\Filament\Resources\ProductsResource;
use App\Models\Product;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProducts extends CreateRecord
{
    protected static string $resource = ProductsResource::class;
    // public $images;
    // protected function mutateFormDataBeforeCreate(array $data): array
    // {
    //     $imge = $data['image'];
    // //     foreach($imge as $imgx){
    // //     $img = new \App\Models\ProductImages();
    // //     $img->product_id = 1;
    // //     $img->image_url = url('storage/'.$imgx);
    // //     $img->save();
    // // } 
    // $this->images = $imge;
    //     $data['image'] = $imge[0];

    //     return $data;
    // }

    // protected function afterCreate()
    // {
    //     $p = Product::orderBy('id','desc')->first();
    //          foreach($this->images as $imgx){
    //     $img = new \App\Models\ProductImages();
    //     $img->product_id = $p->id;
    //     $img->image_url = url('storage/'.$imgx);
    //     $img->save();
    // } 
    // }
    
}
