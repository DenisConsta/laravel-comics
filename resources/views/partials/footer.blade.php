<footer>
    <!-- ? Top Footer -->
    <div id="top-footer" class="">
        <div class="container  h-100">
            <div class="row h-100">

                <!-- ? links -->
                <div class="col links-col d-flex justify-content-between">
                    {{-- <nav v-for="(nav, index) in links.navs " :key="index" class="py-5 px-2">
                        <h3>{{ nav . listName }}</h3>
                        <ul>
                            <li v-for="(link, i) in nav.items" :key="i">
                                <a href="#">{{ link }}</a>
                            </li>
                        </ul>
                    </nav> --}}
                </div>

                <!-- ? Logo -->
                <div class="col logo-bg d-none d-lg-block"></div>
            </div>
        </div>
    </div>

    <!-- ? Bottom Footer -->
    <div id="bottom-footer" class="">
        <div class="container ">
            <div class="my-btn">Sign-up now!</div>
            <nav class="d-flex ">
                <h3 class="d-none d-md-block">Follow us</h3>
                <ul class="d-flex m-0 gap-3">
{{--                     <li v-for="(icon, i) in links.socials" :key="i">
                        <img :src="getPathImage(icon)" :alt="icon">
                    </li> --}}
                </ul>
            </nav>
        </div>
    </div>


</footer>
