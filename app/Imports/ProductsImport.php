<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Product([
            'title' => $row[0],
            'price' => $row[1],
            'image' => $row[2],
            'category' => $row[3],
            'description' => $row[4]
  
        ]);
    }
}
