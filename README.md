<h1 style='text-align:center'>Library API (Laravel)</h1>
<hr>
<h2 style='text-align:center'>Routes explanation</h2>
<div>GET http://example.domain.com/api/books - get all books with list of authors as an array</div>
<div>GET http://example.domain.com/api/authors - get authors list</div>
<div>
    POST http://example.domain.com/api/books - store new book. 
    <b>Body parameteres example:</b>
    <span>{"name": "example book", "year": "2000", "authors_id": [1, 2, 3]}</span>
    <span>Book has columns: name, year, reserved</span>
</div>
<div>DELETE http://example.domain.com/api/books/:id - delete book with all it's relationships</div>
<div>PUT/PATCH http://example.domain.com/api/books/:id - update book<b>Body parameteres example:</b> <span>{"reserved": "1"}</span></div>
<div>GET http://example.domain.com/api/books/?author_id=:author_id&book_name=book_name - Search specific author's book (Works with MYSQL Like operator on book name)</div>
<div>GET http://example.domain.com/api/books/?book_name=book_name - Search book (Works with MYSQL Like operator)</div>
