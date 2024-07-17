<?php

namespace App\Filament\Resources\ProductsResource\Pages;

use App\Filament\Resources\ProductsResource;
use App\Models\Product;
use App\Models\ProductImages;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Http\Client\Request;

class EditProducts extends EditRecord
{
    protected static string $resource = ProductsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
    protected function mutateFormDataBeforeSave(array $data): array
    {
        // dd($data);
        $id = json_decode(request()->components[0]['snapshot'])->data->data[0]->id;
        $imge = $data['image'];
            foreach($imge as $imgx){
            $img =  \App\Models\ProductImages::where("product_id",$id)->get();
            foreach($img as $imgg){
                $imgsx  = ProductImages::find($imgg->id);
                $imgsx->image_url = url('storage/'.$imgx);
                $imgsx->save();
            }
            
            
        } 
        $data['image'] = $imge[0];
        


        return $data;
    }
}
