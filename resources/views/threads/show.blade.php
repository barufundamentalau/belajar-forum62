@extends('layouts.app')
@section('title', 'DOTORG FORUM')
@section('content')
    <div class="card pb-3">
        <div class="card-header">Cras purus odio, vestibulum in vulputate at</div>

        <div class="card-body">
            <div class="media">
                <img width="40" height="40" src="https://images.unsplash.com/photo-1488426862026-3ee34a7d66df?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8d29tYW58ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60" class="mr-3 rounded-circle" style="object-fit: cover; object-position: center;" alt="...">
                <div class="media-body">
                  <a href="#" class="mt-0 d-block">Candra Pratama</a>
                    <div class="text-secondary">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti fugiat doloremque aliquam iste a dicta libero perspiciatis voluptatem eos similique?
                    </div>
                    <small class="text-secondary">
                        <a href="#" class="text-secondary">Candra Pratama</a> posted 3 mintutes ago
                    </small>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-end mr-3" style="margin-top: -2em">
        <div class="col-md-11">
            <div class="card">
                <div class="card-body">
                    <div class="media mb-3">
                        <img width="40" height="40" src="https://images.unsplash.com/photo-1488426862026-3ee34a7d66df?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8d29tYW58ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60" class="mr-3 rounded-circle" style="object-fit: cover; object-position: center;" alt="...">
                        <div class="media-body">
                          <a href="#" class="mt-0 d-block">Candra Pratama</a>
                            <div class="text-secondary">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti fugiat doloremque aliquam iste a dicta libero perspiciatis voluptatem eos similique?
                            </div>
                            <small class="text-secondary d-flex justify-content-between">
                                <div>
                                    <a href="#" class="text-secondary">Candra Pratama</a> replied 3 mintutes ago
                                </div>
                                <div>
                                    &middot; <a href="#" class="text-success">Mark as answer</a>
                                </div>
                            </small>
                        </div>
                    </div>

                    <div class="media mb-3">
                        <img width="40" height="40" src="https://images.unsplash.com/photo-1488426862026-3ee34a7d66df?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8d29tYW58ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60" class="mr-3 rounded-circle" style="object-fit: cover; object-position: center;" alt="...">
                        <div class="media-body">
                          <a href="#" class="mt-0 d-block">Candra Pratama</a>
                            <div class="text-secondary">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti fugiat doloremque aliquam iste a dicta libero perspiciatis voluptatem eos similique?
                            </div>
                            <small class="text-secondary d-flex justify-content-between">
                                <div>
                                    <a href="#" class="text-secondary">Candra Pratama</a> replied 3 mintutes ago
                                </div>
                                <div>
                                    &middot; <a href="#" class="text-success">Mark as answer</a>
                                </div>
                            </small>
                        </div>
                    </div>

                    <div class="media mb-3">
                        <img width="40" height="40" src="https://images.unsplash.com/photo-1488426862026-3ee34a7d66df?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8d29tYW58ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60" class="mr-3 rounded-circle" style="object-fit: cover; object-position: center;" alt="...">
                        <div class="media-body">
                          <a href="#" class="mt-0 d-block">Candra Pratama</a>
                            <div class="text-secondary">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti fugiat doloremque aliquam iste a dicta libero perspiciatis voluptatem eos similique?
                            </div>
                            <small class="text-secondary d-flex justify-content-between">
                                <div>
                                    <a href="#" class="text-secondary">Candra Pratama</a> replied 3 mintutes ago
                                </div>
                                <div>
                                    &middot; <a href="#" class="text-success">Mark as answer</a>
                                </div>
                            </small>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @auth
    <div class="media mt-3">
        <img width="40" height="40" src="https://images.unsplash.com/photo-1488426862026-3ee34a7d66df?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8d29tYW58ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60" class="mr-3 rounded-circle" style="object-fit: cover; object-position: center;" alt="...">
        <div class="media-body">
          <div class="mb-1 text-secondary">
              <strong>Candra Pratama</strong>
              </div>
            <div class="text-secondary">
                <form action="#" method="post">
                    <div class="form-group">
                        <textarea name="body" id="body" rows="5" class="form-control" style="resize: none" placeholder="Submit a comment">

                        </textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Reply</button>
                </form>
            </div>
        </div>
    </div>
    @else
        <div class="mt-2 text-secondary">
            Please <a href="{{ route('login') }}">Login</a> to reply a thread.
        </div>
    @endauth

@endsection
