# Laravel by piotr - Book reviews project

---------------- Lesson 1 ----------------

### Step 1:
- Change .env to mysql and the laravel-10-book-reviews database name

### Commands that i ran
- php artisan make:model Book -m
- php artisan make:model Review -m

### Next up
- adding db table fields to the migrations for books and review
- running php artisan migrate - to create the db & tables

___




---------------- Lesson 2 ----------------
### Table relationships (model relationships)

- we add the foreign key to the migration of reviews:
    `$table->unsignedBigInteger('book_id'); //foreign key`

- we also add this:
    `$table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');`

- we run:
    `php artisan migrate:refresh*** to apply the changes to the db`

#### The above method gives us more flexibility so we can link a different field
#### The below method is if we're using the standard 'id' field and its shorter
 `$table->foreignId('book_id')->constrained()->cascadeOnDelete();`


### Next
- we add a method to the Book class (model):

    ```
    public function reviews()
        {
            return $this->hasMany(Review::class);
        }
    ```


___