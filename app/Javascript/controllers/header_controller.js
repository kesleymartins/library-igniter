import { Controller } from "stimulus"

export default class extends Controller {
  connect() {
    let segment = this.getUrlSegment()

    if (segment === '') {
      segment = 'books'
    }

    const element = this.element.querySelector(`a#${segment}`)

    this.activate(element)
  }

  getUrlSegment() {
    const url = window.location.href

    return url.substring(url.lastIndexOf('/') + 1)
  }

  activate(element) {
    element.classList.add('border', 'border-primary', 'rounded', 'bg-primary-subtle')
  }
}
