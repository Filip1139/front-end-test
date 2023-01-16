const selector = {
  plan: '.js-plan',
}

const state = {
  isActive: 'is-active',
}

export const Plans = {
  init() {
    Plans.items = document.querySelectorAll(selector.plan)

    if(!Plans.items) return;

    Plans.bindEvents()
  },
  bindEvents() {
    Plans.items.forEach(item => {
      item.addEventListener('click', Plans.handleClick)
    })
  },
  handleClick(e) {
    const target = e.currentTarget

    Plans.items.forEach(item => {
      item.classList.remove(state.isActive)
    })

    target.classList.add(state.isActive)
  }
}
