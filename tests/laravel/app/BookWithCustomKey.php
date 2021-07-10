<?php

declare(strict_types=1);

namespace App;

class BookWithCustomKey extends Book
{
    protected $table = 'books';

    protected $fillable = [
        'custom_key',
        'title',
        'author',
        'year',
    ];

    public function getKeyName()
    {
        return 'custom_key';
    }

    public function getKeyType()
    {
        return 'string';
    }

    public function searchableAs()
    {
        return 'books_with_custom_key';
    }
}
