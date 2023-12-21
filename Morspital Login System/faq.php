<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
@import url("https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap");



.mill {
    width: 100%;
    max-width: 800px;
    margin: 0 auto;
    & + section {
        margin-top: 2.5em;
    }
}



summary {
    background-color: #fff;
    position: relative;
    cursor: pointer;
    padding: 1em 0.5em;
    list-style: none;
    &::-webkit-details-marker {
        display: none;
    }
    &:hover {
        background-color: #f2f5f9;
    }
    div {
        display: flex;
        align-items: center;
    }
    h3 {
        display: flex;
        flex-direction: column;
    }
    small {
        color: #999;
        font-size: 0.875em;
    }
    strong {
        font-weight: 700;
    }
    span:first-child {
        width: 4rem;
        height: 4rem;
        border-radius: 10px;
        background-color: #f3e1e1;
        display: flex;
        flex-shrink: 0;
        align-items: center;
        justify-content: center;
        margin-right: 1.25em;
        svg {
            width: 2.25rem;
            height: 2.25rem;
        }
    }
    span:last-child {
        font-weight: 700;
        margin-left: auto;
    }
    &:focus {
        outline: none;
    }
    .plus {
        color: #289672;
    }
}

details {
    border-bottom: 1px solid #b5bfd9;
    &[open] {
        box-shadow: -3px 0 0 #b5bfd9;
    }
    &:first-of-type {
        border-top: 1px solid #b5bfd9;
    }
    & > div {
        padding: 2em 2em 0;
        font-size: 0.875em;
    }
}

dl {
    display: flex;
    flex-wrap: wrap;
    dt {
        font-weight: 700;
    }
    div {
        margin-right: 4em;
        margin-bottom: 2em;
    }
}

    </style>
</head>
<body>
<div class="mill">
	
	<details>
		<summary>
			<div>
				<span style="background-color: #f2dcbb;">
					
				</span>
				<h3>
					<strong>Tailored for African Healthcare Context:</strong>
			
				</h3>
                <span>&#11167;</span>
			</div>
		</summary>
		<div>
			<dl>

           <p> Morrspital is crafted with a deep understanding of the unique challenges faced by healthcare facilities in Africa, ensuring that our solution is not just technologically advanced but culturally and contextually relevant.
           </p>
			</dl>
		</div>
	</details>
	<details>
		<summary>
			<div>
				<span style="background-color: #f2dcbb;">
					
				</span>
				<h3>
					<strong>Scalability and Flexibility:</strong>
			
				</h3>
                <span>&#11167;</span>
			</div>
		</summary>
		<div>
			<dl>

           <p> Whether you're a small clinic or a large hospital, Morrspital grows with you. Our scalable and flexible system adapts to the evolving needs of your healthcare facility.
           </p>
			</dl>
		</div>
	</details>
	<details>
		<summary>
			<div>
				<span style="background-color: #f2dcbb;">
					
				</span>
				<h3>
					<strong>User-Friendly Interface:</strong>
			
				</h3>
                <span>&#11167;</span>
			</div>
		</summary>
		<div>
			<dl>

           <p> We prioritize user experience. Morrspital boasts an intuitive interface, ensuring that your team can seamlessly integrate the system into their workflow with minimal training.
           </p>
			</dl>
		</div>
</details>
<details>
		<summary>
			<div>
				<span style="background-color: #f2dcbb;">
					
				</span>
				<h3>
					<strong>User Training and Support:</strong>
			
				</h3>
                <span>&#11167;</span>
			</div>
		</summary>
		<div>
			<dl>

           <p> We understand that a successful digitization process involves not just technology but also people. Our team provides comprehensive training to your staff, empowering them to navigate and utilize the new digital system with confidence. Ongoing support is also available to address any queries or concerns.
           </p>
			</dl>
		</div>
	</details>
	<details>
		<summary>
			<div>
				<span style="background-color: #f2dcbb;">
					
				</span>
				<h3>
					<strong>Compliance and Security:</strong>
			
				</h3>
                <span>&#11167;</span>
			</div>
		</summary>
		<div>
			<dl>

           <p> We understand the importance of compliance and data security in healthcare. Morrspital adheres to industry standards, keeping patient information secure and ensuring regulatory compliance.
           </p>
			</dl>
		</div>
	</details>
</div>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>