<?php 
        // Books array
        $books = [
            [
                "title" => "The Lion King",
                "author" => "John Doe",
                "url" => "http://www.example.com",
                "releaseYear" => "2001"
            ],
            [
                "title" => "Beauty and the beast",
                "author" => "John Kanan",
                "url" => "http://www.example.com",
                "releaseYear" => "2011"
            ],
            [
                "title" => "The Dog King",
                "author" => "John Doe",
                "url" => "http://www.example.com",
                "releaseYear" => "2018"
            ]
            
        ];
        // function filter to loop through books
        function filter($items, $func){
            $filteredItems = [];
            
            foreach($items as $item){
                if ($func($item)){
                    $filteredItems[] = $item;
                }
            }
            return $filteredItems;
        }

        $filteredBooks = array_filter($books, function ($book){
            return $book["releaseYear"] > 2001;
        });
        
@include("array.view.php");