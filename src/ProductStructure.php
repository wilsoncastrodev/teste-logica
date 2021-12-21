<?php
namespace App;

class ProductStructure
{
    const products = [
        "preto-PP",
        "preto-M",
        "preto-G",
        "preto-GG",
        "preto-GG",
        "branco-PP",
        "branco-G",
        "vermelho-M",
        "azul-XG",
        "azul-XG",
        "azul-XG",
        "azul-P"
    ];

    public function make(): array
    {
        $products_count = array_count_values(self::products);

        foreach($products_count as $product => $count) {
            $product_array = explode("-", $product);
            $result[$product_array[0]][$product_array[1]] = $count;
        }

        return $result;
    }
}