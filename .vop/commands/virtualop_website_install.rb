description 'installs the virtualop website project'

param :machine
param "domain", "the domain at which the website should be available", :mandatory => true
param "service_root", "fully qualified path to the location of the service", :mandatory => true

on_machine do |machine, params|
  dir_name = params["service_root"].split("/").last
    
  machine.chown("file_name" => params["service_root"], "ownership" => "apache")
  
  machine.install_canned_service("service" => "apache/apache")
  machine.add_static_vhost("document_root" => params["service_root"], "server_name" => params["domain"])
  
  machine.restart_unix_service("name" => "httpd")
  
  machine.configure_reverse_proxy("domain" => params["domain"])
end
