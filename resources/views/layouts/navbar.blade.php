<nav>

    <div class="logo"></div>
    <div class="menu">
        <div class="menu-item">
            <p>
                .home<span class="code-syle">()</span>
            </p>
        </div>
        <div class="menu-item">
            <p>
                .about<span class="code-syle">()</span>
            </p>
        </div>
        <div class="menu-item">
            <p>
                .project<span class="code-syle">()</span>
            </p>
        </div>
        <div class="menu-item">
            <p>
                .wall<span class="code-syle">()</span>
            </p>
        </div>
        <div class="menu-item">
            @guest
            <p>
                .home<span class="code-syle">()</span>
            </p>
            @else
            <p>
                {{Auth::guest->email}}
            </p>
            @endguest
        </div>
    </div>

</nav>