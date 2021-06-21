import Alpine from 'alpinejs'

Alpine.data('tabs', () => ({
    active: 'information',
    setActive(tab) {
        this.active = tab
    }
}))

Alpine.start()