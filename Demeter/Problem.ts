class Book {
    private title: string;

    constructor(title: string) {
        this.title = title;
    }

    public getTitle(): string {
        return this.title;
    }
}

class Shelf {
    private books: Book[];

    constructor(books: Book[]) {
        this.books = books;
    }

    public getBooks(): Book[] {
        return this.books;
    }
}

class Library {
    private shelves: Shelf[];

    constructor(shelves: Shelf[]) {
        this.shelves = shelves;
    }

    public getShelves(): Shelf[] {
        return this.shelves;
    }
}

class LibraryService {
    public findBookByTitle(library: Library, title: string): Book | null {
        for (const shelf of library.getShelves()) {
            for (const book of shelf.getBooks()) {
                if (book.getTitle() === title) {
                    console.log(`Libro encontrado: ${title}`);
                    return book;
                }
            }
        }

        console.log(`Libro no encontrado: ${title}`);
        return null;
    }
}

const book1 = new Book("El Principito");
const book2 = new Book("1984");
const shelf = new Shelf([book1, book2]);
const library = new Library([shelf]);

const service = new LibraryService();
service.findBookByTitle(library, "1984");