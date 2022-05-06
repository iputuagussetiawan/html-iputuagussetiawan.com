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
    this.searchField.addEventListener("keyup", () => this.typingLogic())
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
  typingLogic() {
    if(this.searchField.value !=this.previousValue){
      clearTimeout(this.typingTimer);
      if(this.searchField.value){
        if(!this.isSpinnerVisible){
          this.resultsDiv.innerHTML='<div class="spinner-loader"></div>';
          this.isSpinnerVisible=true;
        }
        this.typingTimer = setTimeout(this.getResults.bind(this), 750);
      }else{
        this.resultsDiv.innerHTML = ""
        this.isSpinnerVisible = false
      }
    }
    this.previousValue=this.searchField.value;

  }

  async getResults() {
    try {
      const response = await axios.get(profileCompanyData.root_url + "/wp-json/companyprofile/v1/search?term=" + this.searchField.value)
      const results = response.data
      this.resultsDiv.innerHTML=`
        <div class="row">
          <div class="col-md-4 one-third">
            <h2 class="search-overlay__section-title">General Information</h2>
            ${results.generalInfo.length ? '<ul class="search-list">' : "<p>No general information matches that search.</p>"}
              ${results.generalInfo.map(item => `<li class="search-list__item"><a class="search-list__link" href="${item.permalink}">${item.title}</a> ${item.postType == "post" ? `by ${item.authorName}` : ""}</li>`).join("")}
            ${results.generalInfo.length ? "</ul>" : ""}
          </div>
          <div class="col-md-4 one-third">
            <h2 class="search-overlay__section-title">FAQS</h2>
            ${results.faqs.length ? '<ul class="search-list">' : `<p>No faqs match that search.</p><a href="${profileCompanyData.root_url}/portfolio">View all Portfolio</a>`}
              ${results.faqs.map(item => `<li class="search-list__item">
              <a class="search-list__link" href="${item.permalink}">
                <div class="search-list__info-container">
                  <h3 class="search-list__title">${item.title}</h3>
                  <p class="search-list__excerpt">${item.excerpt}</p>
                </div>
              </a>
              </li>`).join("")}
            ${results.faqs.length ? "</ul>" : ""}
          </div>

          <div class="col-md-4 one-third">
          <h2 class="search-overlay__section-title">Portfolio</h2>
          ${results.ourwork.length ? '<ul class="search-list">' : `<p>No Portfolio match that search.</p>`}
            ${results.ourwork
              .map(
                item => `
              <li class="search-list__item">
                <a class="search-list__link" href="${item.permalink}">
                  <div class="search-list__image-container">
                    <img class="search-list__image" src="${item.image}">
                  </div>
                  <div class="search-list__info-container">
                    <h3 class="search-list__title">${item.title}</h3>
                    <p class="search-list__excerpt">${item.excerpt}</p>
                  </div>
                </a>
              </li>
            `
              )
              .join("")}
          ${results.ourwork.length ? "</ul>" : ""}

        </div>
        </div>`
    
      this.isSpinnerVisible = false
    } catch (e) {
      console.log(e)
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
                        <span class="icon input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                        </span>
                        <input type="text" id="search-term" class="form-control form-control-custom" placeholder="Search Here..." autocomplete="off">
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