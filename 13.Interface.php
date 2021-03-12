<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Interface pada sebuah CRUD
interface Crud
{
    public function insert();
    public function update();
    public function select();
    public function delete();
}

// Interface Wipe, misalnya untuk fasilitas menghapus semua data, hanya contoh.
interface Wipe
{
    public function wipe();
}

// Buat class yang mengurusi data Posts, misal artikel.
// Disini kita implement Crud dan Wipe, tinggal gabungkan dengan koma saja.
class Posts implements Crud, Wipe
{
    public function insert()
    {
        echo "Call method insert ..<br />";
    }

    public function update()
    {
        echo "Call method update ..<br />";
    }

    public function select()
    {
        echo "Call method select ..<br />";
    }

    public function delete()
    {
        echo "Call method delete ..<br />";
    }

    // Wajib membuat method wipe, karena sudah di implement.
    public function wipe()
    {
        echo "Call method wipe ..<br />";
    }
}

$posts = new Posts;
$posts->insert();
$posts->update();
$posts->select();
$posts->delete();
$posts->wipe();
