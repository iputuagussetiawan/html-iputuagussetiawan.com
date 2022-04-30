import axios from "axios"

class Search {
    // 1. describe and create/initiate our object
    constructor() {
      this.addSearchHTML();
      this.resultsDiv = document.querySelector("#search-overlay__results")
      this.openButton = document.querySelectorAll(".btn-nav-search")
      this.closeButton = document.querySelector(".search-overlay__btn-close")
      this.searchOverlay = document.querySelector(".search-overlay")
      this.searchField = document.querySelector("#search-term")
      this.isOverlayOpen = false
      this.typingTimer;
      this.isSpinnerVisible = false
      this.previousValue
      this.events()
    }
  
    // 2. events
    events() {
      this.openButton.forEach(el => {
        el.addEventListener("click", e => {
          e.preventDefault()
          this.openOverlay()
        })
      })
  
      this.closeButton.addEventListener("click", () => this.closeOverlay())
      document.addEventListener("keydown", e => this.keyPressDispatcher(e))
      //this.searchField.addEventListener("keyup", () => this.typingLogic())
    }
  
    // 3. methods (function, action...)
    openOverlay() {
      this.searchOverlay.classList.add("active")
      document.body.classList.add("no-scroll")
      this.searchField.value = ""
      setTimeout(() => this.searchField.focus(), 301)
      console.log("our open method just ran!")
      this.isOverlayOpen = true
      return false
    }
  
    closeOverlay() {
      this.searchOverlay.classList.remove("active")
      document.body.classList.remove("no-scroll")
      console.log("our close method just ran!")
      this.isOverlayOpen = false
    }

    keyPressDispatcher(e) {
      console.log(e);
      if (e.keyCode == 83 && !this.isOverlayOpen && document.activeElement.tagName != "INPUT" && document.activeElement.tagName != "TEXTAREA") {
        this.openOverlay()
      }
      if (e.keyCode == 27 && this.isOverlayOpen) {
        this.closeOverlay()
      }
    }
   


  addSearchHTML(){
    document.body.insertAdjacentHTML(
      "beforeend",
      `
    <div class="search-overlay">
        <div class="close-btn__wrapper">
            <a href="#" class="close-btn search-overlay__btn-close"></a>
        </div>
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 mb-3">
                    <h2 class="search-overlay__title">Search</h2>
                    <div class="input-group">
                        <span class="icon fas fa-search"></span>
                        <input type="text" id="search-term" class="form-control form-control-search" placeholder="Search Here..." autocomplete="off">
                        <!-- <button class="btn btn-outline-primary" type="button" id="btn-nav-search">Search</button> -->
                    </div>
                </div>
            </div>
            <div id="search-overlay__results">
            </div>
        </div>
    </div>
    `)
  }
}

export default Search