<ul class="nav">
    <li class="nav-item">
        <a class="nav-link active" href="{{ route('profile_admin') }}">{{Auth::user()->name}}</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Cars</a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ route('car.create') }}">Add</a>
            <a class="dropdown-item" href="{{ route('added_cars') }}">Added</a>
        </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Category</a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ route('category.create') }}">Add</a>
            <a class="dropdown-item" href="{{ route('categories') }}">Added</a>
        </div>
    </li>
</ul>
