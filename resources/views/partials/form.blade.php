<section>
    <div class="container">
        <form method="POST" action="/ingredientStore">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">nom</label>
                <input type="texte" name="name" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">quantité</label>
                <input type="number" name="quantity" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">image</label>
                <input type="texte" name="image" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


</section>
