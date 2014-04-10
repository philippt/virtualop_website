twist = <<EOT
<% service = machine.service_details('virtualop_website/virtualop_website')
vop_domain = service['extra_params']['vop_url'] 
vop_domain = vop_domain.first if vop_domain.is_a?(Array)
if vop_domain %>
ProxyPass /vop <%= vop_domain %>
ProxyPassReverse /vop <%= vop_domain %>
<% end %>

EOT

static_html :erb_twist => twist, :twist_target => 'vhost'
