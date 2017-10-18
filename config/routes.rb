Rails.application.routes.draw do
  resources :blogs
  root to: 'blogs#index'
  get "/pages/*id" => 'pages#show', as: :page, format: false
  # root to: 'pages#show', id: 'about'
end
