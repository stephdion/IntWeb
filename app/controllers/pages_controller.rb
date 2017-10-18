class PagesController < ApplicationController
  include HighVoltage::StaticPage
  # before_filter :test
  # before_filter :authenticate
  private

  # def test
    # Rails.logger.info 'HIGH VOLTAGE'
  # end
end
