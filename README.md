<h1 style='text-align:center'>Library API (Laravel)</h1>
<hr>
<h2 style='text-align:center'>Routes explanation</h2>
<p>GET&nbsp;&nbsp;&nbsp;/api/books - get all books with list of authors as an array</p>
<p>GET&nbsp;&nbsp;&nbsp;/api/authors - get authors list</p>
<p>
    POST&nbsp;&nbsp;&nbsp;/api/books - store new book. 
    <br><b>Body parameteres example:</b>
    <span>{"name": "example book", "year": "2000", "authors_id": [1, 2, 3]}</span>
    <span>Book has columns: name, year, reserved</span>
</p>
<p>DELETE&nbsp;&nbsp;&nbsp;/api/books/:id - delete book with all it's relationships</p>
<p>PUT/PATCH&nbsp;&nbsp;&nbsp;/api/books/:id - update book<br><b>Body parameters example:</b> <span>{"reserved": "1"}</span></p>
<p>GET&nbsp;&nbsp;&nbsp;/api/books/?author_id=:author_id&book_name=book_name - Search specific author's book (Works with MYSQL Like operator on book name)</p>
<p>GET&nbsp;&nbsp;&nbsp;/api/books/?book_name=book_name - Search book (Works with MYSQL Like operator)</p>
