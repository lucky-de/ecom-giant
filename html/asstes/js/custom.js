// For log in & sign up --------------------
const formBtns = document.querySelectorAll(".form-btn");
const formBlks = document.querySelectorAll(".signin__form");

formBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    const formNo = btn.dataset.form;
    formBlks.forEach((blk) => {
      blk.classList.add("d-none");
      const formBlkNo = blk.dataset.formnum;
      if (formNo === formBlkNo) {
        blk.classList.remove("d-none");
      }
    });
  });
});

// For side menu Modal ----------------
const body = document.querySelector("body");
const menuIcon = document.querySelector(".menu__icon");
const slideNav = document.querySelector(".slide__nav");
const slideNavColse = document.querySelector(".slidenav__close > img");
// For search Modal ----------
const searchIcon = document.querySelector(".search__btn");
const searchNav = document.querySelector(".search__bar");
const searchNavColse = document.querySelector(".search__close > img");
// For Search modal ---------------------
const cartBtn = document.querySelector(".cart__btn");
const cartNav = document.querySelector(".sidecart__block");
const cartNavClose = document.querySelector(".sidecart__close > img");

const modalFunc = function (elm, modal, closeElm) {
  elm.addEventListener("click", () => {
    modal.classList.add("open");
    body.classList.add("fixed");
  });
  window.addEventListener("click", (e) => {
    if (e.target === modal || e.target === closeElm) {
      modal.classList.remove("open");
      body.classList.remove("fixed");
    }
  });
};

modalFunc(menuIcon, slideNav, slideNavColse);
modalFunc(searchIcon, searchNav, searchNavColse);
modalFunc(cartBtn, cartNav, cartNavClose);

$(".toplist__slider").slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  infinite: true,
  autoplaySpeed: 2000,
  prevArrow: document.querySelector(".product__slidebtn .slick-prev"),
  nextArrow: document.querySelector(".product__slidebtn .slick-next"),
  responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    },
  ],
});
// Collapsible ---------------

const collapBtns = document.querySelectorAll(".collapsible__btn");

collapBtns.forEach((btn) => {
  const collapBlock = btn.nextElementSibling;
  btn.addEventListener("click", () => {
    btn.classList.toggle("hide");
    collapBlock.classList.toggle("d-none");
  });
});
// product-details --------------
// $(".detail__slider").slick({
//   infinite: true,
//   arrows: false,
//   slidesToShow: 1,
//   slidesToScroll: 1,
// });

// Product tab -----------------
const tabBtns = document.querySelectorAll(".tab-btn");
const tabs = document.querySelectorAll(".each__tab");

tabBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    tabBtns.forEach((btn) => btn.classList.remove("active"));
    btn.classList.add("active");
    console.log(btn.dataset.tabname);
    tabs.forEach((tab) => {
      tab.classList.add("d-none");
      if (btn.dataset.tabname === tab.dataset.tabfor) {
        tab.classList.remove("d-none");
      }
    });
  });
});
// Item count ---------------
const itemCounts = document.querySelectorAll(".item__count");

if (itemCounts) {
  itemCounts.forEach((item) => {
    const plusBtn = item.querySelector(".item__count > button:last-of-type");
    const minusBtn = item.querySelector(".item__count > button:first-of-type");
    const countBox = item.querySelector(".item__count > span");
    plusBtn.addEventListener("click", () => {
      countBox.textContent = +countBox.textContent + 1;
    });
    minusBtn.addEventListener("click", () => {
      if (+countBox.textContent < 1) {
        countBox.textContent = 0;
      } else {
        countBox.textContent = countBox.textContent - 1;
      }
    });
  });
}
// Pay btn ---------------
const payBtns = document.querySelectorAll(".pay-btn");

if (payBtns) {
  payBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
      payBtns.forEach((btn) => btn.classList.remove("active"));
      btn.classList.add("active");
    });
  });
}
// Dashboard Tabs ---------------
const dashTabs = document.querySelectorAll(".dash__tab");
const dashTabBlocks = document.querySelectorAll(".dash__tablock");

if (dashTabs) {
  dashTabs.forEach((tab) => {
    tab.addEventListener("click", () => {
      dashTabs.forEach((tab) => tab.classList.remove("active"));
      dashTabBlocks.forEach((blk) => blk.classList.add("d-none"));
      tab.classList.add("active");
      dashTabBlocks.forEach((blk) => {
        if (tab.dataset.tabfor === blk.dataset.tabname) {
          blk.classList.remove("d-none");
        }
      });
    });
  });
}
// Password view/hide -------------
const passToggler = document.querySelector(".pass__toggler");
if (passToggler) {
  const passInput = passToggler.nextElementSibling;

  showHidePassword = () => {
    if (passInput.type == "password") {
      passInput.setAttribute("type", "text");
      passToggler.classList.add("pass-show");
    } else {
      passToggler.classList.remove("pass-show");
      passInput.setAttribute("type", "password");
    }
  };

  passToggler.addEventListener("click", () => {
    if (passInput.value.trim().length > 0) showHidePassword();
  });
}
