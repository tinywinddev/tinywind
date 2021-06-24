import Alpine from 'alpinejs'

Alpine.data('tabs', () => ({
    active: 'information',
    setActive(tab) {
        this.active = tab
    }
}))

Alpine.data('stars', () => ({
    count: 1,
    setCount(count) {
        this.count = count
    },
    star: (i) => ({
        ['x-on:keydown.space.prevent']() {
            this.count = i
        },
        ['x-on:keydown.arrow-right.prevent']() {
            const next = this.$el.closest('[x-data="stars"]').querySelector(`[data-star="${i + 1}"]`)

            if (! next) {
                return
            }

            next.focus()
            this.count = next.dataset.star
        },
        ['x-on:keydown.arrow-left.prevent']() {
            const previous = this.$el.closest('[x-data="stars"]').querySelector(`[data-star="${i - 1}"]`)

            if (! previous) {
                return
            }

            previous.focus()
            this.count = previous.dataset.star
        },
        ['x-bind:data-star']() {
            return i
        }
    })
}))

Alpine.data('accordion', () => ({
    active: 'general',
    headers: [],
    init() {
        this.$el.dataset.accordion = true
    },
    header: (id) => {
        return {
            ['x-bind:aria-expanded']() {
                if (! this.headers.includes(id)) {
                    this.headers.push(id)
                }

                return JSON.stringify(this.active === id)
            },
            ['x-bind:aria-controls']() {
                return id
            },
            ['x-on:click.prevent']() {
                this.toggle(id)
            },
            ['x-on:keydown.space.prevent']() {
                this.toggle(id)
            },
            ['x-on:keydown.enter.prevent']() {
                this.toggle(id)
            },
            ['x-on:keydown.arrow-up.prevent']() {
                this.focusPreviousHeader(id)
            },
            ['x-on:keydown.arrow-down.prevent']() {
                this.focusNextHeader(id)
            },
            ['x-bind:id']() {
                return `accordion_header_${id}`
            },
            ['x-bind:data-focus']() {
                return id
            }
        }
    },
    headerIcon: (id) => ({
        ['x-bind:class']() {
            if (this.active === id) {
                return 'transform rotate-180'
            }

            return 'transform rotate-0'
        }
    }),
    focusNextHeader(current) {
        const index = this.headers.indexOf(current)

        if (index === this.headers.length - 1) {
            this.closestRoot().querySelector(`[data-focus="${this.headers[0]}"]`).focus()
        } else {
            this.closestRoot().querySelector(`[data-focus="${this.headers[index + 1]}"]`).focus()
        }
    },
    focusPreviousHeader(current) {
        const index = this.headers.indexOf(current)

        if (index === 0) {
            this.closestRoot().querySelector(`[data-focus="${this.headers[this.headers.length - 1]}"]`).focus()
        } else {
            this.closestRoot().querySelector(`[data-focus="${this.headers[index - 1]}"]`).focus()
        }
    },
    closestRoot() {
        return this.$el.closest('[data-accordion]')
    },
    toggle(id) {
        if (this.active === id) {
            this.active = null
        } else {
            this.active = id
        }
    },
    section: (id) => ({
        ['x-bind:id']() {
            return id
        },
        ['x-bind:aria-labelledby']() {
            return `accordion_header_${id}`
        },
        ['x-bind:role']() {
            return 'region'
        },
        ['x-bind:hidden']() {
            return this.active !== id
        },
        ['x-show']() {
            return this.active === id
        }
    })
}))

window.Alpine = Alpine

Alpine.start()