let list = document.getElementById("list");


list.addEventListener('change', function() {
  if(this.value ==='DVD-disc'){
    let attribute = document.getElementById("attribute");
    attribute.innerHTML = "";
    let input = document.createElement("input");
    input.setAttribute("placeholder", "size");
    input.setAttribute("name", "attribute");
    let p = document.createElement("p");
    p.innerHTML = "text for size";
    attribute.appendChild(input);
    attribute.appendChild(p);
    
  }else if(this.value ==='Book'){
    let attribute = document.getElementById("attribute");
    attribute.innerHTML = "";
    let input = document.createElement("input");
    input.setAttribute("placeholder", "weight");
    input.setAttribute("name", "attribute");
    let p = document.createElement("p");
    p.innerHTML = "text for weight";
    attribute.appendChild(input);
    attribute.appendChild(p);
  }else if(this.value ==='Furniture'){
    let attribute = document.getElementById("attribute");
    attribute.innerHTML = "";
    let input = document.createElement("input");
    let input2 = document.createElement("input");
    let input3 = document.createElement("input");
    input.setAttribute("name", "attribute");
    input2.setAttribute("name", "attribute");
    input3.setAttribute("name", "attribute");
    input.setAttribute("placeholder", "height");
    input2.setAttribute("placeholder", "width");
    input3.setAttribute("placeholder", "length");
    let p = document.createElement("p");
    p.innerHTML = "text for dimension";
    attribute.appendChild(input);
    attribute.appendChild(input2);
    attribute.appendChild(input3);
    attribute.appendChild(p);
  }
}, false);

