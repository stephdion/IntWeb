# config/initializers/high_voltage.rb
HighVoltage.configure do |config|
  # Root path like /
  # config.home_page = 'about'

  # Set Root Routes like /about
  # config.route_drawer = HighVoltage::RouteDrawers::Root

  # Change the content path /pages/about to /site/about
  # config.content_path = 'site/'

  # Disable Routes
  config.routes = false

  # Default Layout
  # config.layout = 'your_layout'

end
