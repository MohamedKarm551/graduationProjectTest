// const liElements = document.querySelectorAll('.accordion-content2  ul li');
// for (let i = 0; i < liElements.length; i++) {
//   const li = liElements[i];
//   // Do something with each li element, for example:
//   console.log(li.textContent);
// }
// ========================
// const data = ['data for القرآن الكريم', 'data for أجهزة القياس', 'data for اللغة الإنجليزية', 'data for الإلكترونيات'];

// const liElements = document.querySelectorAll('.accordion-content2 ul li');

// for (let i = 0; i < liElements.length; i++) {
//   const li = liElements[i];

//   // Add an event listener to the <li> element
//   li.addEventListener('click', function() {
//     const clickedText = this.textContent;
//     const index = Array.from(liElements).indexOf(this);
//     const dataForClickedText = data[index];
//     console.log(dataForClickedText);
//     // Display the data for the clicked <li> element
//     // For example, you can display it in a popup or a tooltip
//   });
// }
// ========================
const data = [
'title:  القرآن الكريم ISL 101S	<br>	 des: Include: , 	حفظ الأجزاء الحادى والعشرون الى الخامس والعشرون من القران الكريم',

 'title: أجهزة القياس Measurement <br>	des: Include: , Instruments	Measuring DC Voltage and Current , Measuring AC Voltage and Current , Digital and Analog Multi-meters , Frequency Measurement , Power Measuring ,  Calibration of Measuring Devices',

  'title: ENG 102	English Language 2	<br>	des: Include: , Academic English grammar, Prophet Mohammed (bUH), Fundamental of English and English compositions, The Right , Guided Caliphs , Parts to enhance four language skills of reading, writing , listening , and speaking, Ibn Khouldoun, Muslim Festivals , The History of Science in Islam  Centers of Islam Civilization: Baghdad Centers of Islam Civilization: ',

   'title:Electronics<br>		des: Include: ,  , Semiconductor Diodes , Bipolar Junction Transistors , Amplification Circuits (theory and design) , Applications of Bipolar Junction Transistors , Emitter Follower Circuits , Two-Stage Amplifiers'
   ,
    'title:data for  Labs<br>		des: Include: ,  Analog Measuring Devices (Operation and Calibration)  , Digital Measuring Devices (Operation and Calibration) , Power Amplifier Experiments , Operational Amplifier Experiments  , Experiments for Logic Gates ',

     'title:Programming Methods	Introduction to programming <br>	des: Include: ,  Object oriented programming , Language constructs , Writing software application , Testing ',

     'title:BAS108 Mathematics "Vectors and Matrices"	des: Include: , Determinants (definition, properties and expanding) , Kramer’s rule , Solving Linear Equations , Vectors (definition, vector algebra , magnitude, scalar product , and cross product) , Matrices (definition, types , matrix algebra and matrix norms) , matrix invers , Applications (Projection and solving linear equations using matrices.)'
     ,

     'title:Mathematics "Vectors and Matrices"<br>		des: Include: , Determinants (definition, properties and expanding) , Kramer’s rule , Solving Linear Equations , Vectors (definition, vector algebra, magnitude, scalar product, and cross product) , Matrices (definition, types, matrix algebra and matrix norms), matrix invers,Applications (Projection and solving linear equations using matrices.)',

     'title:SCE109	Electrical Circuit theory<br>		des: Include: ,  Circuit Elements, Circuit Theorems , Methods of Connecting Electrical Circuits , Power and Energy in Electrical Circuits',

     'title:ISL 101	Prophetic biography and History of the Righteous Caliphs <br>	des: Include: ,   	                                                                         , 1 -  نشأة العرب ,   2 -  أهمية التخطيط وتحديد الأهداف ,  3 -  أسباب مقاومة التغيير لدى قريش وأساليب المقاومة ,  4 -   أهمية تكوين الفرق وقيادة التعيير, 5 -  أهمية التخطيط وتحديد الأهداف  ,    6 -  أهمية الشورى فى الإسلام  وسبل صياغة القرار,  7 - صفة الحلم وأهميتها ومفهوم العهد وأهميته ,  8 - اهمية الكلمة الطيبة والرأي الحر وإقرار مبدأ الانتخابات فى الإسلام    ,   9 -  الشروط الواجب توافرها فى الخليفة,    10 -  جغرافية المكان وتأثيرها على عمليات التخطيط   ,    11 -  الفتوحات الإسلام يه فى عهد أبوبكر ويسرد نتائجها,  12 - أهمية المنهج التطبيقى ( وحدة الغاية – وحدة الصف – شدة اليأس – الثبات والمثابرة – طاعة القيادة ) ,       13 - المظاهر الحضارية ( المظهر السياسى – المظهر الإدارى – الشورى ) , 14 - حياة الخلفاء الراشدين وخلافتهم وأعمالهم وفتوحاتهم ,' ,

     'title:Data Structures and Algorithms	des: Include: , Programmability, Parallel Algorithms , Computer Languages, Applications, Rows , Groups , Registers, Files, Menus, Queuing , Clusters, Trees',

     'title:Electromagnetics and optical fields	des: Include: , Static Electricity, Magnetism, Faraday’s Law , Conversion of Electromagnetic Energy , Laplace’s Laws, Poisson’s Equation , Power Generated from Magnetic Fields , Maxwell’s Laws, Photochemical Energy',

     'title:BAS109	Mathematics des: Include: , "Differential Equations"	Derivatives, Types of Differential Equations , Methods of solving Differential Equations, Solving Systems of Differential Equations , Partial Differentiation',

     'title:SCE110	Sequential Circuits<br>		des: Include: , Standard Gates (Definition and Components) , Sequencing Elements, Coding Circuits , Memory Circuits',

     'title:ISL202	The Glorious Quran<br>		des: Include: , حفظ الأجزاء السادس عشر الى العشرون من القران الكريم ',

     'title:SCE201	Integrated Circuits<br>		des: Include: , MOS Circuit, NMOS Circuit, CMOS Circuit - Memory Types, How to Use “SPICE” , Design of Integrated Circuits Using VHDL',

     'title:SCE202	Signals and System Engineering<br>	des: Include: , System Analysis in the Time Domain ,System Analysis in the Frequency Domain , System Analysis in the Space Domain , Fourier Analysis, Stability of Systems',

     'title:SCE203	Sequential Machines	<br> des: This course provide difference between sequential logic and combinational logic Include: ,  overview of the latches and flip flops, analysis and design of sequential logic circuits, Registers and counters, Memory and fundamentals of programmable logic devices, Circuit Analysis Using VHDL',

     'title:SCE205	Object-Oriented Programming	<br> des: Include: ,  Procedural Programming vs. OOP, Objects (Definition, Object Relationships, and Interaction between Objects), Classes, DataType',

     'title:BAS205	Mathematics <br> des: Include: , (Functions and Transform Functions)	Infinite Series, Laplace Transform, Inverse Laplace Transform -Fourier Transform, Inverse Fourier Transform-Special Functions (Bessel Function, and Chebyshev Function), Functions of Complex Variables',

     'title:SCE206	Laboratory 2	<br> des: Include: ,  Experiments for Electronic Circuits, Experiments for Control Circuits, Experiments for Electric Circuits, Experiments for Programming.',
     'ISL 202	Interpretation of Al Quran <br> des: Include: ,   1.	معنى علوم القرآن  وموضوعه   وفوائده.                                                               , 2 .	التعريف بالقرأن الكريم وبأسمائه وبأوصافه. ,                                                                          3.	آيات القرآن وسوره  ,                                                                               4 .	أول مانزل وآخر مانزل من القرآن الكريم. ,                                                                              5.	المكي والمدني من القرآن الكريم. ,                                                                                      6 . 	نزول القرآن منجما وأسراره. ,     7.	أسباب النزول ,  8.	الربا في ضوء القرآن الكريم. , 9.	من مظاهر قدرة الله في إحياء الأرض الموات من خلال:	آيات من سورة الحجر. , 	آيات من سورة الحج. , 	آيات من سورة ياسين ,	',

     'title:ENG 202	English Language 3	<br> des: Include: , Academic English grammar, Prophet Mohammed (bUH), Fundamental of English and English compositions, The Right, Guided Caliphs, Parts to enhance four language skills of reading, writing, listening and speaking, Ibn Khouldoun, Muslim Festivals, The History of Science in Islam  ',

     'title:BAS206	Statistics and Probability<br>	des: Include: , Set Theory, Counting Techniques, Probability Theorem, Random Variables and Distribution , Functions (Gauss Distribution, Poisson Distribution, Uniform Distribution), Markov Chains',

     'title:BAS205	Mathematics<br> des: Include: , (Functions and Transform Functions)	Infinite Series, Laplace Transform, Inverse Laplace Transform , Fourier Transform, Inverse Fourier Transform , Special Functions (Bessel Function, and Chebyshev Function), Functions of Complex Variables',

     'title:SCE207	Logic Circuits<br>	des: Include: , Basic Logic Operations , Switching Algebra Theory with N Variables. Dual Functions , Multi-Valued Logic , Universal Model Logic ,  Threshold Logic ,  Logic Families (e.g., TTL Gates, Emitter-Coupled Logic, Integrated Injection Logic) ,  Reed-Muller Polynomial ,  R-M Universal Logic Module Network , Design of Bipolar Logic Families Interface , BiCMOS-CMOS interface',

     'title:SCE208	Automatic Control	<br>des: Include: , Control in the Time Domain ,  Control in the Frequency Domain, Control in the Space Domain, Closed Loop Control, Stability, Controllability and Observability of Dynamic Systems, Types of Controllers',

     'title:SCE209	Electrical Machines<br>	des: Include: , DC Machines (Types, Construction, Types and Properties), DC Motors (Applications, Types, Theory of Operation and Speed Control), DC Generators (Theory of Operation, Types and Operation in Parallel) , Special DC Machines , Three-Phase Systems, Synchronous Generators, Synchronous Motors, Synchronous Generators in Parallel',

     'title:ISL 301S	The Glorious Quran<br>	des: Include: , حفظ الأجزاء الحادى عشر الى الخامس عشر من القران الكريم',

     'title:SCE301	Communication Systems<br>	des: Include: , Introduction to data communication. Overview of the OSI and TCP/IP models. Network architecture and connection, packet switching techniques. Frequency response, bandwidth, filtering, and noise. Information theory concepts such as Nyquist theorem, Shannon theorem, and Sampling theorem. Analog and digital modulation techniques. Pulse Code Modulation (PCM). Communication systems circuits and devices. Data encoding. Physical Layer Protocols. Data Link Control (point to point communication; design issues; link management; error control; flow control) and multiplexing',

     'title:BAS301	Mathematics<br> des: Include: , (Queuing Theory and Modeling)	Introduction to Queuing systems, Characteristics of queuing systems, Random variable, stochastic process, Types of random variables, Markov chain, birth and death process, Simulation, Poisson process,  multi-disciplinary queuing system',

     'title:ISL 302	Prophetic Tradition(Hadith)<br>des: Include: , 	1.	الأجل أقرب من العمل , 2.	التعاون فى حفر الخندق , 3.	حوض النبى صلى الله عليه وسلم , 4.	حرمة الغش , 5.	بناء المنبر النبوى , 6.	سرعة الضوء , 7.	العلاقة بين اللؤلؤ والصوت ,  8.	        الصوت وسماعه , 9.                                                                             	  دوران الكون , 10.	اليوم 24 ساعة , 11.	الاقتصاد , 12.	الإحصاء , 13.	الجار احق بالشفعة , 14.	التطاول فى البنيان , ',

     'title:SCE 303	Digital Control<br>	des: Include: , Introduction to digital control, Discrete system analysis, System Stability, system response, Digital controllers design, Z transform, Inverse z-transform.',

     'title:SCE304	Laboratory 3<br>	des: Include: , Database and SQL, Assembly programming, Microprocessor, Operating system scheduling algorithms, Automata theory, Alarm system, Motion sensor, MATLAB toolbox',

     'title:SCE305	Automata<br> 	des: Include: , Introduction to sequential machines and automata theory, finite state machine, types of automata, conversion between different types of automata, Regex ',

     'title:SCE308	Microprocessors<br>	des: Include: , Basic microprocessor structure , Addressing memory , Addressing modes and flags , Bus cycles and internal operations , Use of the stack , Input and Output Interfaces , Parallel Interface Adaptors (PIA),Interrupts',

     'title:SCE302	Operating Systems<br>	des: Include: , Operating systems organizations and structures, Process management, Memory management, Virtual memory, Distributed systems, Case study (Linux & Windows)',

     'title:SCE306	Electric Power Systems<br>	des: Include: , Theories of analog machines, synchronous machines, electrical generators, tachometers, step motors. ',

     'title:SCE307	Database<br>	des: Include: , Introduction to Databases and DBMSs, Relational data model, Data definition language, Data manipulation language , Basic Query Formulation with SQL, Database normalization, Entity relationship diagram',

     'title:SCE310	Sensors and PowerConverters<br>	des: Include: ,  Analog signal processing and amplification, Filters, Heat Energy Transformer types and specifications, Light sensing devices, Interfacing of light & energy sensors with microcontrollers, Position and Kinetic energy sensors, water flow sensors, water level sensors, Programs and circuits for interfacing with microcontrollers ',

     'title:SCE402	Computer Networks and its Programming<br> des: Include: , 	Network frameworks for LAN & WAN, Network security and reliability, applications, socket programming, TPC/IP layers, OSI model',

     'title:SCE403	Computer Aided Design<br> des: Include: , 	Analysis and design of electronic circuits using computer software, design of large-scale circuits using computer programs. ',

     'title:SCE405	Laboratory 4	<br> des: Include: , Experiments on Interfacing with I/O devices, sensors, digital and analog circuits  ',
     'title:مشروع التخرج ',
     'title:SCE401	Embedded Systems<br> des: Include: ,  Measurements	Embedded systems, Memory Types, Segments and Management, sequential interfacing systems, Network control, applications of embedded systems, Assembly language, C programming ',
     'title:SCE410	Compilers	<br> des: Include: ,  Deterministic and non-deterministic compilers, syntax formulation and input analysis, linking and loading techniques, automata theory, top-down parsing, bottom-up parsing',
     
     'title:Elective Course 1: SCE411	<br> des: Include: ,   Advanced Software	client-server model, web application programming, web application security, modular application, micro-services, enterprise design patterns, software application pillars for clean code                        <br> <strong>OR</strong> <br> <h2>title:SCE422	Systems and Data Security</h2>	Include: , The objective of this course is to provide basic knowledge about the technical and operational issues of modern cryptosystems and the related standards. Topics include threats to network security and schemes for breaking security, classical encryption techniques, block ciphers and stream ciphers, DES and triple DES, AES, block cipher operation modes, asymmetric ciphers: RSA, Diffie-Hellman key exchange, El Gamal cryptosystem, hash functions, MAC functions, digital signature, key management and distribution, X.509 certificates, transport level security: SSL and TLS, types and configurations of firewalls.',
     'title:SCE401	Embedded Systems Measurements		<br> des: Include: ,   Embedded systems, Memory Types, Segments and Management, sequential interfacing systems, Network control, applications of embedded systems, Assembly language, C programming ',
     'title:SCE404	Interfacing Systems	<br> des: Include: ,  Computer Input/output devices Interface, serial input, parallel input, PCI, component interfacing, signal processing, sensors, digital and analog circuit-',

     'title:SCE407	Software Engineering <br>	des:	Include: ,  Software systems, Dataflow diagrams , Data structures , Modelling of data , design using modelling , Goal driven design , reliability of software systems , UML  ',

     'title:SCE408	Intelligent Systems	<br>des:  Include: ,  Basic concepts of knowledge, knowledge representation, first order logic, second order logic, syntactic reasoning, semantic reasoning, logic formalization, neural networks',

     'title:  SCE425	Digital Communications<br>	des: The course covers contemporary engineering topics in digital communication systems. Topics Include: ,  Communication Systems Overview, Signals and Signal Space, Analysis and Transmission of Signals, Amplitude Modulations and Demodulations, Angle Modulation and Demodulation, Principles of Digital Data Transmission, Spread Spectrum Communications, and Channel Equalization.',



    ];

const liElements = document.querySelectorAll('.accordion-content2 ul li');
const popupWrapper = document.querySelector('.popup-wrapper');
const popupText = document.querySelector('#popup-text');

for (let i = 0; i < liElements.length; i++) {
  const li = liElements[i];

  // Add an event listener to the <li> element
  li.addEventListener('click', function() {
    const clickedText = this.textContent;
    const index = Array.from(liElements).indexOf(this);
    const dataForClickedText = data[index];//text 
    // console.log("title"+dataForClickedText.substring(0, dataForClickedText.indexOf("des:")));
    const title= dataForClickedText.substring(0, dataForClickedText.indexOf("des:"));
    const des= dataForClickedText.substring(dataForClickedText.indexOf("des:"),dataForClickedText.indexOf("Include: , "));
    const Contents=dataForClickedText.substring(dataForClickedText.indexOf("Include: , "));
    const topicsArray = Contents.split(", ");

     //console.log(topicsArray)
 
    //  console.log("title "+title,"des "+des,"include "+Contents)
    // console.log(dataForClickedText.indexOf("des:"))
    // console.log(dataForClickedText.indexOf("Include: , "))
    popupText.innerHTML = `
    <h2>${title}</h2>
    <span>${des}</span>
    <ul>
      ${topicsArray.map(topic => `<li>${topic}</li>`).join('')}
    </ul>
  `;
    popupWrapper.style.display = 'block';
  });
}

// Add an event listener to the popup wrapper to close the popup when the user clicks outside the popup content
// popupWrapper.addEventListener('click', function(event) {
//   if (event.target === this) {
//     popupWrapper.style.display = 'none';
//   }
// });

// closePopup
function closePopup() {
  document.querySelector('.popup-wrapper').style.display = 'none';
}
// ========== 15- 5 - 2023 (karam added photo slider) ============
// const imgContainers = document.querySelectorAll('.img-container');
// const popup = document.querySelector('.popup');
// const popupImg = document.querySelector('.popup img');

// imgContainers.forEach(imgContainer => {
//   imgContainer.addEventListener('click', () => {
//     popup.classList.add('open');
//     popupImg.src = imgContainer.querySelector('img').src;
//   });
// });


// popup.addEventListener('click', () => {
//   popup.classList.remove('open');
// });
const imgContainers = document.querySelectorAll('.img-container');
const popup = document.querySelector('.popup');
const popupImg = document.querySelector('.popup img');

imgContainers.forEach(imgContainer => {
  const img = imgContainer.querySelector('img');
  
  // Apply black and white filter
  img.style.filter = 'grayscale(100%)';
  
  imgContainer.addEventListener('click', () => {
    popup.classList.add('open');
    
    // Toggle filter on click
    if (img.style.filter === 'grayscale(100%)') {
      img.style.filter = 'none';
    } else {
      img.style.filter = 'grayscale(100%)';
    }
    
    popupImg.src = img.src;
  });
});

popup.addEventListener('click', () => {
  popup.classList.remove('open');
  
  // Reset filter when popup is closed
  imgContainers.forEach(imgContainer => {
    const img = imgContainer.querySelector('img');
    img.style.filter = 'grayscale(100%)';
  });
});

