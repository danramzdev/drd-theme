// Import Styles
import '../scss/style.scss'

// Import JS
// Pages
import Home from './pages/Home'
import AllPages from './pages/AllPages'

class App {
	constructor() {
		this.currentNamespace =
			document.querySelector('.global__site').dataset.namespace

		this.createPages()
	}

	createPages() {
		this.pages = {
			inicio: new Home()
		}

		this.page = this.pages[this.currentNamespace]

		if (!this.page) {
			this.page = new AllPages()
		}

		this.page.create()
	}
}

new App()
