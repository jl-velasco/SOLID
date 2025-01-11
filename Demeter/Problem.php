<?php

class Book
{
    private $title;

    public function __construct($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }
}

class Shelf
{
    private $books;

    public function __construct($books)
    {
        $this->books = $books;
    }

    public function getBooks()
    {
        return $this->books;
    }
}

class Library
{
    private $shelves;

    public function __construct($shelves)
    {
        $this->shelves = $shelves;
    }

    public function getShelves()
    {
        return $this->shelves;
    }
}

class LibraryService
{
    public function findBookByTitle(Library $library, $title)
    {
        foreach ($library->getShelves() as $shelf) {
            foreach ($shelf->getBooks() as $book) {
                if ($book->getTitle() === $title) {
                    echo "Libro encontrado: $title\n";
                    return $book;
                }
            }
        }

        echo "Libro no encontrado: $title\n";
        return null;
    }
}

$book1 = new Book("El Principito");
$book2 = new Book("1984");
$shelf = new Shelf([$book1, $book2]);
$library = new Library([$shelf]);

$service = new LibraryService();
$service->findBookByTitle($library, "1984");