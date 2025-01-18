<div class="container-fluid">
    <div class="row justify-content-center">
        <form action="{{route('contact')}}" method="POST" class="col-12 col-md-6 mt-5 shadow border p-4 text-center">
            @csrf
            <div class="mb-3">
              <label class="form-label">Name</label>
              <input type="text" name="name" class="form-control">
            </div>
            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
              <label class="form-label">Messaggio</label>
              <textarea name="message" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn border text-center">Invia email</button>
          </form>
    </div>
</div>