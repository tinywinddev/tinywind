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
    }
}))

Alpine.start()