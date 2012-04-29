description 'installs the virtualop website project'

param :machine
param "domain", "the domain at which the website should be available", :mandatory => true
param "service_root", "fully qualified path to the location of the service", :mandatory => true

on_machine do |machine, params|
  dir_name = params["service_root"].split("/").last
  new_root = "/var/www/#{dir_name}"
  machine.ssh_and_check_result("command" => "mv #{params["service_root"]} #{new_root}")
  @op.without_cache do
    machine.list_working_copies
  end
  
  # TODO probably only works on centos
  machine.chown("file_name" => new_root, "ownership" => "apache")
  
  machine.install_canned_service("service" => "apache/apache")
  machine.add_static_vhost("document_root" => new_root, "server_name" => params["domain"])
  
  machine.restart_unix_service("name" => "httpd")
  
  machine.configure_reverse_proxy("domain" => params["domain"])
end
