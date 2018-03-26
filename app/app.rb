require 'sinatra'
require 'digest'

#class App < Sinatra::Base
  get '/' do
    erb :index
  end

  post '/' do
    @username = params[:username]
    @password = Digest::MD5.hexdigest(params[:password])
    if @username == 'admin' && @password == '7ef6156c32f427d713144f67e2ef14d2'
        erb :welcome
    else
        erb :deny
    end


  end



