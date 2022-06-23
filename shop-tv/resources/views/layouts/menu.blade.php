<header>
    <div class="header-top"></div>
    <div class="header-content d-flex">
            <div class="logo align-items-start col-2">
                <img src="{{asset('assets/logo.png')}}" alt="" srcset="">
            </div>
            <div class="search-form align-items-center col-8">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Tìm sản phẩm" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                    <button class="btn btn-secondary" type="button">
                            <i class="fas fa-search"></i>
                    </button>
                    </div>
                </div>
            </div>
            <div class="cart-button align-items-end col-2">
            <button class="btn btn-outline-danger">
                    Giỏ Hàng 2 / <i class="fas fa-shopping-cart"></i>   
            </button>
            </div>
    </div>
    <div class="header-menu d-flex">
        <div class="vertical-menu col-3 row mr-2" >
           <span class=" col-10 align-self-start">DANH MỤC SẢN PHẨM</span> 
          <div class="col-2 align-self-end"><i class="fas fa-bars"></i></div> 
        </div>
        <div class="info-menu col-9 d-flex text-center">
            <div class="col-3 d-flex ml-2">
                <div class="icon-menu-info col-4">
                    <img src="{{asset('assets/logo.png')}}" alt="">
                </div>
                <div class="title-menu-info col-8 ml-2">
                    <span>Giao Hàng Nhanh Chóng</span>
                </div>
            </div>
            <div class="col-3 d-flex ml-2">
                <div class="icon-menu-info col-4">
                    <img src="{{asset('assets/logo.png')}}" alt="">
                </div>
                <div class="title-menu-info col-8 ml-2">
                    <span>Hàng Chính Hãng Chất Lượng</span>
                </div>
            </div><div class="col-3 d-flex ml-2">
                <div class="icon-menu-info col-4">
                    <img src="{{asset('assets/logo.png')}}" alt="">
                </div>
                <div class="title-menu-info col-8 ml-2">
                    <span>Đổi Trả Nhanh Chóng</span>
                </div>
            </div><div class="col-3 d-flex ml-2">
                <div class="icon-menu-info col-4">
                    <img src="{{asset('assets/logo.png')}}" alt="">
                </div>
                <div class="title-menu-info col-8 ml-2">
                    <span>Uy Tín Chất Lượng</span>
                </div>
            </div>
        </div>
    </div>
</header>