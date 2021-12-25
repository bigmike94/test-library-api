<h1 style='text-align:center'>Library API (Laravel)</h1>
<hr>
<h2 style='text-align:center'>Routes explanation</h2>
<p><b>GET&nbsp;&nbsp;&nbsp;/api/books</b> - get all books with list of authors as an array</p>
<p><b>GET&nbsp;&nbsp;&nbsp;/api/authors</b> - get authors list</p>
<p>
    <b>POST&nbsp;&nbsp;&nbsp;/api/books</b> - store new book. 
    Body parameteres example:
    <span>{"name": "example book", "year": "2000", "authors_id": [1, 2, 3]}.</span>
    <span>Book has columns: name, year, reserved</span>
</p>
<p><b>DELETE&nbsp;&nbsp;&nbsp;/api/books/:id</b> - delete book with all it's relationships</p>
<p><b>PUT/PATCH&nbsp;&nbsp;&nbsp;/api/books/:id</b> - update book. Body parameters example:</u> <span>{"reserved": "1"}</span></p>
<p><b>GET&nbsp;&nbsp;&nbsp;/api/books/?author_id=:author_id&book_name=book_name</b> - Search specific author's book (Works with MYSQL Like operator on book name)</p>
<p><b>GET&nbsp;&nbsp;&nbsp;/api/books/?book_name=book_name</b> - Search book (Works with MYSQL Like operator)</p>
