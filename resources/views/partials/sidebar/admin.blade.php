<div class="d-flex flex-column flex-shrink-0 p-3" style="background-color: #010828; width: 280px; height: 100%;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-light text-decoration-none">
        <svg class="bi pe-none me-2" width="40" height="32">
            <use xlink:href="#bootstrap"></use>
        </svg>
        <span class="fs-4">{{ config('app.name') }}</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{ route('admin.index') }}" class="nav-link active" aria-current="page">
                <svg class="bi pe-none me-2" width="16" height="16">
                    <use xlink:href="#home"></use>
                </svg>
                Dashboard
            </a>
        </li>
    </ul>
    <hr>
</div>
