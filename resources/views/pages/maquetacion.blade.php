@extends('layouts.main')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endpush

@section('content')
    <div class="toggle-btn">
        <button id="toggle-btn" onclick="getData(this)">Show</button>
    </div>
    <div class="main-section">
        <div id="top-post" class="post">
            <h2 class="section-title">Top Article</h2>
            <article>
                <div class="article-thumbnail">
                    <img src="{{ asset('images/3.png') }}" alt="top article" />
                </div>
                <div class="article-details">
                    <div class="article-title">
                        <h5>Top 3 resources to learn Biology for free</h5>
                    </div>
                    <div class="article-date">
                        <div class="article-duration">2 min read</div> <span class="separator">|</span>
                        <div class="article-published-at">Oct, 28th 2022</div> <span class="separator">|</span>
                        <div class="article-category">Science</div>
                    </div>
                    <div class="article-description">
                        <p class="content">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                            molestiae quas vel...
                        </p>
                        <button class="read-btn">read more</button>
                    </div>
                </div>
            </article>
        </div>
        <div id="trending-posts" class="post">
            <h2 class="section-title">Trending</h2>
            <article class="trending">
                <div class="thumbnail">
                    <img src="{{ asset('images/2.png') }}" alt="trending post img" />
                </div>
                <div class="details">
                    <h5 class="title">Five interesting ways to improve your thinking</h5>
                    <div class="article-date">
                        <div class="article-duration">2 min read</div><span style="padding: 0 0.5em" class="separator">|</span>
                        <div class="article-published-at">Oct, 28th 2022</div>
                    </div>
                </div>
            </article>
            <article class="trending">
                <div class="thumbnail">
                    <img src="{{ asset('images/3.png') }}" alt="trending post img" />
                </div>
                <div class="details">
                    <h5 class="title">Top four resources to improve your medical knowledge</h5>
                    <div class="article-date">
                        <div class="article-duration">2 min read</div><span style="padding: 0 0.5em" class="separator">|</span>
                        <div class="article-published-at">Oct, 28th 2022</div>
                    </div>
                </div>
            </article>
            <article class="trending">
                <div class="thumbnail">
                    <img src="{{ asset('images/4.png') }}" alt="trending post img" />
                </div>
                <div class="details">
                    <h5 class="title">Top three resources to learn how to draw for free</h5>
                    <div class="article-date">
                        <div class="article-duration">2 min read</div> <span style="padding: 0 0.5em" class="separator">|</span>
                        <div class="article-published-at">Oct, 28th 2022</div>
                    </div>
                </div>
            </article>
        </div>
        <div id="popular-post" class="post">
            <h2 class="section-title">Popular</h2>
            <article>
                <div class="article-thumbnail">
                    <img src="{{ asset('images/5.png') }}" alt="top article" />
                </div>
                <div class="article-details">
                    <div class="article-title">
                        <h5>Top 3 resources to learn Biology for free</h5>
                    </div>
                    <div class="article-date">
                        <div class="article-duration">2 min read</div><span class="separator">|</span>
                        <div class="article-published-at">Oct, 28th 2022</div><span class="separator">|</span>
                        <div class="article-category">Science</div>
                    </div>
                    <div class="article-description">
                        <p class="content">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                            molestiae quas vel...
                        </p>
                        <button class="read-btn">read more</button>
                    </div>
                </div>
            </article>
        </div>
    </div>
@endsection

@push('innerJs')
    <script src="{{ asset('js/dom.js') }}"></script>
    <script src="{{ asset('js/data.js') }}"></script>
@endpush