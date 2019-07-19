<?php
namespace App\Services;
use App\Item;
class ItemService
{
    public function __construct()
    {
    }
    public static function getItems($licitation_id)
    {
        $items = Item::all()->where('licitation_id', $licitation_id);
        return $items;
    }
    public static function createItem($attributes)
    {
        $item = Item::create($attributes);
        return $item;
    }
    public static function removeItem($item_id)
    {
        $item = Item::find($item_id);
        $item->delete();
    }
}