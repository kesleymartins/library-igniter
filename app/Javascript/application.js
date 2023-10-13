import { Application } from "stimulus"
import HeaderController from './controllers/header_controller'

const application = Application.start()
application.register('header', HeaderController)
