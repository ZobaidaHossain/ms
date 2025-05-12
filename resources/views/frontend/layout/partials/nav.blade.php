  <!-- ======= Header ======= -->
  <header id="header" class="p-0 fixed-top">
    <!-- <div class="row">
        <div class="col-md-12">
            <div class="marquee-container">
                <div class="marquee-text d-flex align-items-center justify-content-between">
                    <span>মুসলিম আলী শামসুন নাহার মেমোরিয়াল ফাউন্ডেশন গ্রাম বাংলার অনগ্রসর জনগোষ্ঠীর জীবন মান
                        উন্নয়নে
                        নিবেদিত।</span>
                </div>
            </div>
        </div>
    </div> -->
    <div class="row">
        <div class="col-md-12">
            <!-- Marquee Container -->
            <div class="marquee-container">
                <div class="marquee-text d-flex align-items-center justify-content-between">
                    <span>{{translate('মুসলিম আলী শামসুন নাহার মেমোরিয়াল ফাউন্ডেশন গ্রাম বাংলার অনগ্রসর জনগোষ্ঠীর জীবন মান উন্নয়নে নিবেদিত।','The Muslim Ali Shamsun Nahar Memorial Foundation aims to improve the lives of underprivileged people in rural Bengal.')}}</span>
                </div>
            </div>

            <!-- Language Toggle -->
            {{-- <div class="language-toggle">
                <a href="{{ route('languageSet', ['lang' => 'en']) }}">
                <input type="radio" id="lang-en" name="language" value="en" checked>
                <label for="lang-en" class="lang-btn en">EN</label></a>
<a href="{{ route('languageSet', ['lang' => 'bn']) }}">
                <input type="radio" id="lang-bn" name="language" value="bn">
                <label for="lang-bn" class="lang-btn bn">BN</label></a>
            </div> --}}
            <div class="language-toggle">
                <a href="{{ route('languageSet', ['lang' => 'bn']) }}">
                    <label for="lang-bn" class="lang-btn bn">বাংলা</label>
                </a>
                <a href="{{ route('languageSet', ['lang' => 'en']) }}">
                    <label for="lang-en" class="lang-btn en">English</label>
                </a>

            </div>

        </div>
    </div>



    <div class="container py-2 d-flex align-items-center justify-content-between">
        <a href="{{ route('home') }}" class="text-decoration-none">
        <h1 class="logo">


            <img loading="lazy" class="img-fluid"
                src="{{ asset('assets/img/msfoundation_logo_text.png') }}" alt="muslim-ali-foundation">
            <a class="logo logo-text" href="{{ route('home') }}">
                {{translate('এমএস ফাউন্ডেশন','MS Foundation')}}
            </a>
        </h1></a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><li>
                    <a class="nav-link scrollto active" href="{{ route('home') . '#hero' }}">{{translate('নীড়পাতা','Home')}}</a>
                </li>
                </li>

                <li class="dropdown"><a href="{{ route('home'). '#about' }}"><span>{{translate('আমাদের সম্পর্কে','About us')}}</span> <i
                            class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{route('background')}}">{{translate('পটভূমি','Backdrop')}}</a></li>
                        <!-- <li><a href="index.html#why-us">লক্ষ্য ও উদ্দেশ্য</a></li> -->
                        <li><a href="{{ route('objective') }}">{{translate('লক্ষ্য ও উদ্দেশ্য','Goals and objectives')}}</a></li>
                        <li><a href="{{ route('advisor') }}">{{translate('উপদেষ্টামন্ডলী','Advisory Board')}}</a></li>

                        <li><a href="{{ route('home') . '#executive' }}">{{translate('নির্বাহী পরিষদ','Executive Council')}}</a></li>
                        <li><a class="nav-link scrollto" href="{{ route('home') . '#service' }}">{{translate('সেবাসমূহ','Services')}}</a></li>

                    </ul>
                </li>

                <li class="dropdown"><a href="{{ route('organization') }}"><span>{{translate('অঙ্গসংঠন ও প্রকল্প','Organizations & Projects')}}</span> <i
                            class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a class="nav-link scrollto" href="{{ route('organization') }}">{{translate('অঙ্গসংঠনের কার্যক্রম','Activities of the Organization')}}</a></li>
                        <li><a class="nav-link scrollto" href="{{ route('projectArea') }}">{{translate('প্রকল্প এলাকা','Project Area')}}</a></li>
                        <li><a class="nav-link scrollto" href="{{route('project')}}">{{translate('বাস্তবায়িত ও সমাপ্ত প্রকল্প','Implemented and Completed Projects')}}</a>
                        </li>
                        <li><a class="nav-link scrollto" href="{{ route('audience') }}">{{translate('লক্ষ্যভূক্ত জনগোষ্ঠী','Target population')}}</a></li>
                    </ul>
                </li>

                <li class="dropdown"><a href="#"><span>{{translate('গ্যালারী ','Gallery')}}</span>
                        <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a class="nav-link scrollto" href="{{ route('gallery') }}">{{translate('স্থিরচিত্র','Image')}}</a></li>
                        <li><a class="nav-link scrollto" href="{{ route('video') }}">{{translate('ভিডিও','Video')}}</a></li>
                    </ul>
                <li><a class="nav-link scrollto " href="{{ route('notice') }}">{{translate('নোটিশ','Notice')}}</a></li>
                <li><a class="nav-link scrollto" href="{{ route('home') . '#contract' }}">{{translate('যোগাযোগ','Contact Us')}}</a></li>
                <li>
                    <a class="py-1 getstarted scrollto" class="btn btn-primary" href="{{ route('support') }}">
                        <img loading="lazy" class="img-responsive"
                            src="{{ asset('assets/img/donate.png') }}" alt="Donate Us" width="20px">
                        &nbsp; {{translate('সাপোর্ট
                        করুন','Support')}}
                    </a>
                </li>

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->

    </div>
</header>
<!-- End Header -->
