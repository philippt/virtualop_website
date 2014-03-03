description 'installs the virtualop website project'

param :machine
param! "domain", "the domain at which the website should be available"
param! "service_root", "fully qualified path to the location of the service"
param! "vop_url", "http URL to the virtualop instance for login"

on_machine do |machine, params|
  #dir_name = params["service_root"].split("/").last
    
  #machine.chown("file_name" => params["service_root"], "ownership" => "apache")
  #machine.allow_access_for_apache("file_name" => params["service_root"])
  
  address_file = params["service_root"] + '/address.json'
  machine.write_file("target_filename" => address_file, "content" => [{}.merge_from(params, :vop_url)].to_json())
  machine.allow_access_for_apache("file_name" => address_file)
  
  #machine.install_canned_service("service" => "apache/apache")
  #machine.add_static_vhost("document_root" => params["service_root"], "server_name" => params["domain"])
  #machine.restart_unix_service("name" => "httpd")
  #machine.configure_reverse_proxy("domain" => params["domain"])
end
