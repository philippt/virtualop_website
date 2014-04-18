description 'installs the virtualop website project'

param :machine
param! "domain", "the domain at which the website should be available"
param! "service_root", "fully qualified path to the location of the service"
param! "vop_url", "http URL to the virtualop instance for login"

on_machine do |machine, params|
  address_file = params["service_root"] + '/address.json'
  machine.write_file("target_filename" => address_file, "content" => [{}.merge_from(params, :vop_url, :domain)].to_json())
  machine.allow_apache_read_access("file_name" => address_file)
end
