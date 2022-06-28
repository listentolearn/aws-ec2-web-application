variable "region" {
    type = string
    description = "aws region where VM will be povisioned"
    default = "us-east-1"  
}

variable "ami" {
    type = string
    description = "aws ami used to provision the VM"
    default = "ami-0cff7528ff583bf9a"
}

variable "instance_ssh_public_key" {
  type = string
  description = "ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABgQDOlCnLISN39GK6uvGLzBrbkoem4qdcLUxpcMmz4oSZbUvQyCgk8Ry2Y2n0f/RyQkkarpRXnStluzdOfL+fNdmeLSdYrxkeOAjpUc6irFuFktRqoITa6ur4h1vTFz0QAor+Wbuj8Pc3fnHNQvO3bDrij9A65QoQdqo16PoOYWvG6zUyaXkrFQOK+mE1F8fsoBEWN8nq2zWZnWert8/I3bTEuIIm0HWRzKE73jETuB7tB38VatX0Kih2wmWi+vcc4rCM9gtHI8R1qlfHXeJ4S+zqeLmPn2iagEmvFUm3UjqFYFIHhj1NdwkbaaPgLUGRXBOQ9Y75fPSLSnjK7o22nm5HrbvXUHgL+6TYhFECh41oGsnfqQLzfdaC0ro86I3wwtSVBr2/gbCSWqovKu1o/TiDVoDcq4MEbHSnV5sdSEMpAjqLQYDGuLvcwG4FWAXirVUZFuIijxTSl5oHaZRD9hfz7dYyP6Vrm/F10UBIccMkS/yxF+3fr7RGhOROJ4UBEts= ericknyatenya@erickubuntuserver"
}

data "http" "my_public_ip" {
    url = "https://ifconfig.co/json"
    request_headers = {
        Accept = "application/json"
    }
}

locals {
  my_ip = jsondecode(data.http.my_public_ip.body)
}
