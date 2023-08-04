function LocalStorageService() {
  return {
      get(itemName) {
          const item = localStorage.getItem(itemName);
          // const numPatt = new RegExp(/^\d+$/);
          // const jsonPatt = new RegExp(/[\[\{].*[\}\]]/);
          if (item) {
              return JSON.parse(item)
          }
          else {
              return null;
          }
      },

      set(itemName, item) {
          if (typeof item === "object") {
              localStorage.setItem(itemName, JSON.stringify(item));
          } else {
              localStorage.setItem(itemName, item);
          }
      },

      remove(itemName) {
          localStorage.removeItem(itemName);
      }
  }

}

var localStorageService = LocalStorageService()

$(document).ready(function () {
  $(document).scroll(function () {
    const header = document.querySelector(".header");
    if (window.scrollY > 20) {
      header.classList.add("header-active");
    } else {
      header.classList.remove("header-active");
    }
  });
  $("#nav-item-user").click(function () {
    const loginuser = document.querySelector(".login-user");
    loginuser.style.display = "flex";
    const backdrop = document.querySelector(".backdrop");
    backdrop.style.display = "block";
  })
  
  $("#close").click(function () {
    const loginuser = document.querySelector(".login-user");
    loginuser.style.display = "none";
    const backdrop = document.querySelector(".backdrop");
    backdrop.style.display = "none";
    const backdropdk = document.querySelector(".dangky");
    backdropdk.style.display = "none"
  })
  $("#btn-dk").click(function () {
    const backdropdk = document.querySelector(".dangky");
    backdropdk.style.display = "flex"
    const loginuser = document.querySelector(".login-user");
    loginuser.style.display = "none";
  })
  $("#close1").click(function () {
    const backdrop = document.querySelector(".backdrop");
    backdrop.style.display = "none";
    const backdropdk = document.querySelector(".dangky");
    backdropdk.style.display = "none"
  })
  $("#btn-cn").click(function () {
    const backdropcn = document.querySelector(".capnhap");
    backdropcn.style.display = "flex"
    const backdropdk = document.querySelector(".dangky");
    backdropdk.style.display = "none";
    const loginuser = document.querySelector(".login-user");
    loginuser.style.display = "none";
  })
  $("#close2").click(function () {
    const backdrop = document.querySelector(".backdrop");
    backdrop.style.display = "none";
    const backdropcn = document.querySelector(".capnhap");
    backdropcn.style.display = "none"
  })
 


  var swiper = new Swiper(".mySwiper", {
    loop: true,
        loopFillGroupWithBlank: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 3,
        spaceBetween: 50,
        slidesPerGroup: 3,
        loop: true,
        loopFillGroupWithBlank: true,
      },
      // when window width is >= 480px
      480: {
        slidesPerView: 3,
        spaceBetween: 50,
        slidesPerGroup: 4,
        loop: true,
        loopFillGroupWithBlank: true,
      },
      // when window width is >= 640px
      1024: {
        slidesPerView: 4,
        spaceBetween: 50,
        slidesPerGroup: 4,
        loop: true,
        loopFillGroupWithBlank: true,
      }
    },
  });

  var swiper1 = new Swiper(".mySwiper1", {
  
   autoplay:{
    delay:6000,
    disableOnInteraction: true,
   },
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 3,
        spaceBetween: 50,
        slidesPerGroup: 3,
        loop: true,
        loopFillGroupWithBlank: true,
      },
      // when window width is >= 480px
      480: {
        slidesPerView: 3,
        spaceBetween: 50,
        slidesPerGroup: 3,
        loop: true,
        loopFillGroupWithBlank: true,
      },
      // when window width is >= 640px
      1024: {
        slidesPerView: 4,
        spaceBetween: 50,
        slidesPerGroup: 4,
        loop: true,
        loopFillGroupWithBlank: true,
      }
    },
  });



 
  
  
});