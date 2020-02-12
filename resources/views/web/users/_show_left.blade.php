<div class="sidebar-box bg-light">
    <div class="bio agent">
        <div class="img">
            <img src="{{ asset('images/team-1.jpg') }}" class="img-fluid" alt="Colorlib Template">
        </div>
        <div class="desc">
            <h3>{{ $user->name }}</h3>
            <p class="h-info"><span class="location">{{ __('users.profile.join_time') }} &mdash;</span> <span class="details"> {{ $user->created_at->diffForHumans() }}</span>
            </p>
        </div>
    </div>

    <h3>{{ __('users.profile.introduction') }}</h3>
    <p>{{ $user->introduction }}</p>
</div>
<div class="sidebar-box ftco-animate">
    <div class="categories">
        <h3>Categories</h3>
        <li><a href="#">Jobs <span>(12)</span></a></li>
        <li><a href="#">Visual Assistant <span>(22)</span></a></li>
        <li><a href="#">Coffee <span>(37)</span></a></li>
        <li><a href="#">Drinks <span>(42)</span></a></li>
        <li><a href="#">Foods <span>(14)</span></a></li>
        <li><a href="#">Travel <span>(140)</span></a></li>
    </div>
</div>

<div class="sidebar-box ftco-animate">
    <h3>Recent Blog</h3>
    <div class="block-21 mb-4 d-flex">
        <a class="blog-img mr-4"
           style="background-image: url('{{ asset('images/image_1.jpg') }}');"></a>
        <div class="text">
            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
                    blind texts</a></h3>
            <div class="meta">
                <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
            </div>
        </div>
    </div>
    <div class="block-21 mb-4 d-flex">
        <a class="blog-img mr-4"
           style="background-image: url('{{ asset('images/image_2.jpg')}}');"></a>
        <div class="text">
            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
                    blind texts</a></h3>
            <div class="meta">
                <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
            </div>
        </div>
    </div>
    <div class="block-21 mb-4 d-flex">
        <a class="blog-img mr-4"
           style="background-image: url('{{ asset('images/image_3.jpg')}}');"></a>
        <div class="text">
            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
                    blind texts</a></h3>
            <div class="meta">
                <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
            </div>
        </div>
    </div>
</div>

<div class="sidebar-box ftco-animate">
    <h3>Tag Cloud</h3>
    <div class="tagcloud">
        <a href="#" class="tag-cloud-link">dish</a>
        <a href="#" class="tag-cloud-link">menu</a>
        <a href="#" class="tag-cloud-link">food</a>
        <a href="#" class="tag-cloud-link">sweet</a>
        <a href="#" class="tag-cloud-link">tasty</a>
        <a href="#" class="tag-cloud-link">delicious</a>
        <a href="#" class="tag-cloud-link">desserts</a>
        <a href="#" class="tag-cloud-link">drinks</a>
    </div>
</div>

<div class="sidebar-box ftco-animate">
    <h3>Paragraph</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem
        necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente
        consectetur similique, inventore eos fugit cupiditate numquam!</p>
</div>
