Rails.application.routes.draw do
  devise_for :users
  resources :blogs
  root to: 'blogs#index'
  get "/pages/*id" => 'pages#show', as: :page, format: false
  # root to: 'pages#show', id: 'about'
end
