description 'installs the virtualop website project'

param :machine
param "domain", "the domain at which the website should be available", :mandatory => true

on_machine do |machine, params|  
  machine.install_service("service_root" => "/etc/vop/service_descriptors/apache")
  machine.add_static_vhost("document_root" => "/var/www/virtualop_website", "server_name" => params["domain"])
  machine.re_start_unix_service("name" => "httpd")
  
  host_name = machine.name.split('.')[1..10].join('.')
  proxy_name = "proxy." + host_name
  @op.with_machine(proxy_name) do |proxy|
    proxy.add_reverse_proxy("server_name" => [ params["domain"] ], "target_url" => "http://#{machine.ipaddress}/")
    proxy.ssh_and_check_result("command" => "/etc/init.d/httpd restart")
  end
end
