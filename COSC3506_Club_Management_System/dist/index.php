<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Club Management System Sign Up</title>
    <link rel="stylesheet" href="./CSS/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Material+Icons"
      rel="stylesheet"
    />
    <style>
      .spacer {
        width: 100%;
        background-repeat: no-repeat;
        position: absolute;
        background-size: cover;
        bottom: 0;
      }
      .layer1 {
        aspect-ratio: 1920/400;
        background-image: url("./SVG/Curve\ 1.svg");
        z-index: -1;
      }

      .w-20 {
        width: 5rem;
      }

      .bubble {
        aspect-ratio: 475/476;
        background-image: url("./SVG/Design\ Bubble.svg");
        z-index: 2;
        transform-origin: bottom right;
        transform: scale(0.85);
      }
      .iconborder svg path {
        transition: stroke 0.2s ease-in-out;
      }

      .iconborder:hover svg path {
        stroke: #ffffff;
      }
      .animate-width {
        transition: width 1s ease-in-out;
      }

      @keyframes fadeIn {
        from {
          opacity: 0;
        }
        to {
          opacity: 1;
        }
      }

      .fade-in-left {
        animation: fadeIn 2.5s cubic-bezier(0.99, 0, 1, 1);
      }

      .fade-in {
        animation: fadeIn 2s ease-in-out;
      }
    </style>
  </head>
  <body class="bg-gradient-to-r from-main-purple to-main-blue">
    <div class="relative">
      <svg
        class="spacer"
        style="z-index: -2"
        width="1920"
        height="766"
        viewBox="0 0 1920 766"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M1920 494.074V766H0V16.2228C63.9294 -2.05408 127.477 -7.96441 173 14.8032C228.329 42.475 297.112 100.05 366.101 157.799C456.714 233.648 547.684 309.797 609 318.883C656.211 325.879 724.061 294.646 804.529 257.605C908.138 209.912 1032.67 152.588 1161 154.84C1389 158.841 1685 318.883 1769 374.897C1789.89 388.826 1847.77 433.654 1920 494.074Z"
          fill="url(#paint0_linear_2342_90)"
        />
        <defs>
          <linearGradient
            id="paint0_linear_2342_90"
            x1="2365"
            y1="478.252"
            x2="-243"
            y2="480.798"
            gradientUnits="userSpaceOnUse"
          >
            <stop offset="0.214764" stop-color="#9253FE" />
            <stop offset="1" stop-color="#4F2499" />
          </linearGradient>
        </defs>
      </svg>
      <div class="spacer layer1"></div>
      <div
        class="fixed top-0 left-0 bg-white h-full w-20 shadow-lg z-20 overflow-y-auto"
      >
        <div class="flex flex-col gap-5 justify-center items-center mt-2">
          <div
            id="nav-colaspe"
            class="iconborder flex justify-center items-center size-12 hover:bg-main-purple hover:shadow-xl rounded-lg cursor-pointer transition duration-300 ease-in-out"
            onclick="toggleNav()"
          >
            <svg
              width="28"
              height="28"
              viewBox="0 0 34 34"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M4.25 17H29.75M4.25 8.5H29.75M4.25 25.5H29.75"
                stroke="#1E1E1E"
                stroke-width="4"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
          </div>
          <div
            class="iconborder flex justify-center items-center size-12 hover:bg-main-purple hover:shadow-xl rounded-lg cursor-pointer transition duration-300 ease-in-out"
          >
            <svg
              class="bell"
              width="28"
              height="28"
              viewBox="0 0 34 34"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M19.4508 29.75C19.2018 30.1794 18.8443 30.5358 18.4142 30.7835C17.984 31.0313 17.4964 31.1617 17 31.1617C16.5036 31.1617 16.016 31.0313 15.5858 30.7835C15.1557 30.5358 14.7982 30.1794 14.5492 29.75M25.5 11.3333C25.5 9.079 24.6045 6.91699 23.0104 5.32294C21.4163 3.72888 19.2543 2.83334 17 2.83334C14.7457 2.83334 12.5837 3.72888 10.9896 5.32294C9.39553 6.91699 8.5 9.079 8.5 11.3333C8.5 21.25 4.25 24.0833 4.25 24.0833H29.75C29.75 24.0833 25.5 21.25 25.5 11.3333Z"
                stroke="#1E1E1E"
                stroke-width="3"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
          </div>
          <div
            class="iconborder flex justify-center items-center size-12 hover:bg-main-purple hover:shadow-xl rounded-lg cursor-pointer transition duration-300 ease-in-out"
          >
            <svg
              width="28"
              height="28"
              viewBox="0 0 34 34"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <rect width="34" height="34" fill="none" />
              <path
                d="M29.75 29.75L23.5875 23.5875M26.9167 15.5833C26.9167 21.8426 21.8426 26.9167 15.5833 26.9167C9.32411 26.9167 4.25 21.8426 4.25 15.5833C4.25 9.32411 9.32411 4.25 15.5833 4.25C21.8426 4.25 26.9167 9.32411 26.9167 15.5833Z"
                stroke="#CDAFFF"
                stroke-width="4"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
          </div>
          <div
            class="iconborder size-12 hover:bg-main-purple hover:cursor-pointer hover:shadow-xl rounded-lg transition duration-300 ease-in-out"
          >
            <a href="#" class="w-full h-full flex justify-center items-center">
              <svg
                width="28"
                height="28"
                viewBox="0 0 34 34"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M12.75 31.1666V17H21.25V31.1666M4.25 12.75L17 2.83331L29.75 12.75V28.3333C29.75 29.0848 29.4515 29.8054 28.9201 30.3368C28.3888 30.8681 27.6681 31.1666 26.9167 31.1666H7.08333C6.33189 31.1666 5.61122 30.8681 5.07986 30.3368C4.54851 29.8054 4.25 29.0848 4.25 28.3333V12.75Z"
                  stroke="#1E1E1E"
                  stroke-width="3"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </a>
          </div>
          <div
            class="iconborder size-12 hover:bg-main-purple hover:cursor-pointer hover:shadow-xl rounded-lg transition duration-300 ease-in-out"
          >
            <a href="#" class="w-full h-full flex justify-center items-center">
              <svg
                width="28"
                height="28"
                viewBox="0 0 34 34"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M30.0468 22.5108C29.1455 24.6422 27.7359 26.5203 25.9411 27.981C24.1463 29.4417 22.021 30.4405 19.7511 30.8901C17.4811 31.3397 15.1355 31.2263 12.9195 30.56C10.7034 29.8937 8.68432 28.6947 7.03871 27.0677C5.39311 25.4408 4.17109 23.4355 3.4795 21.2272C2.78791 19.0189 2.64781 16.6748 3.07145 14.3999C3.49508 12.1249 4.46955 9.98837 5.90967 8.17702C7.34978 6.36567 9.21169 4.93468 11.3326 4.00915M31.1659 17C31.1659 15.1396 30.7995 13.2974 30.0876 11.5786C29.3756 9.85985 28.3321 8.29813 27.0166 6.98263C25.7011 5.66714 24.1394 4.62363 22.4206 3.91169C20.7018 3.19974 18.8597 2.83331 16.9993 2.83331V17H31.1659Z"
                  stroke="#1E1E1E"
                  stroke-width="3"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </a>
          </div>
          <div
            class="iconborder size-12 hover:bg-main-purple hover:cursor-pointer hover:shadow-xl rounded-lg transition duration-300 ease-in-out"
          >
            <a href="#" class="w-full h-full flex justify-center items-center">
              <svg
                width="28"
                height="28"
                viewBox="0 0 34 34"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M19.8327 2.83331H8.49935C7.7479 2.83331 7.02723 3.13182 6.49588 3.66318C5.96453 4.19453 5.66602 4.9152 5.66602 5.66665V28.3333C5.66602 29.0848 5.96453 29.8054 6.49588 30.3368C7.02723 30.8681 7.7479 31.1666 8.49935 31.1666H25.4994C26.2508 31.1666 26.9715 30.8681 27.5028 30.3368C28.0342 29.8054 28.3327 29.0848 28.3327 28.3333V11.3333M19.8327 2.83331L28.3327 11.3333M19.8327 2.83331V11.3333H28.3327M16.9993 25.5V17M12.7493 21.25H21.2493"
                  stroke="#1E1E1E"
                  stroke-width="3"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </a>
          </div>
          <div
            class="iconborder size-12 hover:bg-main-purple hover:cursor-pointer hover:shadow-xl rounded-lg transition duration-300 ease-in-out"
          >
            <a href="#" class="w-full h-full flex justify-center items-center">
              <svg
                width="28"
                height="28"
                viewBox="0 0 34 34"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M21.25 4.25H26.9167C27.6681 4.25 28.3888 4.54851 28.9201 5.07986C29.4515 5.61122 29.75 6.33189 29.75 7.08333V26.9167C29.75 27.6681 29.4515 28.3888 28.9201 28.9201C28.3888 29.4515 27.6681 29.75 26.9167 29.75H21.25M14.1667 24.0833L21.25 17M21.25 17L14.1667 9.91667M21.25 17H4.25"
                  stroke="#1E1E1E"
                  stroke-width="3"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </a>
          </div>
          <div
            class="iconborder size-12 hover:bg-main-purple hover:cursor-pointer hover:shadow-xl rounded-lg transition duration-300 ease-in-out"
          >
            <a href="#" class="w-full h-full flex justify-center items-center">
              <svg
                width="28"
                height="28"
                viewBox="0 0 34 34"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <g clip-path="url(#clip0_2355_511)">
                  <path
                    d="M16.9993 21.25C19.3466 21.25 21.2493 19.3472 21.2493 17C21.2493 14.6527 19.3466 12.75 16.9993 12.75C14.6521 12.75 12.7493 14.6527 12.7493 17C12.7493 19.3472 14.6521 21.25 16.9993 21.25Z"
                    stroke="#1E1E1E"
                    stroke-width="3"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M27.4827 21.25C27.2941 21.6772 27.2378 22.1512 27.3212 22.6108C27.4045 23.0704 27.6236 23.4944 27.9502 23.8283L28.0352 23.9133C28.2986 24.1764 28.5076 24.4889 28.6502 24.8329C28.7928 25.1768 28.8662 25.5455 28.8662 25.9179C28.8662 26.2902 28.7928 26.6589 28.6502 27.0029C28.5076 27.3468 28.2986 27.6593 28.0352 27.9225C27.772 28.1859 27.4596 28.3949 27.1156 28.5375C26.7716 28.68 26.4029 28.7534 26.0306 28.7534C25.6583 28.7534 25.2896 28.68 24.9456 28.5375C24.6016 28.3949 24.2892 28.1859 24.026 27.9225L23.941 27.8375C23.6071 27.5109 23.1831 27.2918 22.7235 27.2085C22.264 27.1251 21.79 27.1814 21.3627 27.37C20.9437 27.5495 20.5863 27.8477 20.3346 28.2278C20.0829 28.6079 19.9478 29.0533 19.946 29.5091V29.75C19.946 30.5014 19.6475 31.2221 19.1162 31.7534C18.5848 32.2848 17.8641 32.5833 17.1127 32.5833C16.3612 32.5833 15.6406 32.2848 15.1092 31.7534C14.5779 31.2221 14.2793 30.5014 14.2793 29.75V29.6225C14.2684 29.1535 14.1166 28.6988 13.8437 28.3173C13.5709 27.9358 13.1896 27.6452 12.7493 27.4833C12.3221 27.2947 11.8481 27.2385 11.3885 27.3218C10.929 27.4051 10.5049 27.6242 10.171 27.9508L10.086 28.0358C9.82287 28.2992 9.51039 28.5082 9.16643 28.6508C8.82247 28.7934 8.45378 28.8668 8.08143 28.8668C7.70909 28.8668 7.3404 28.7934 6.99643 28.6508C6.65247 28.5082 6.33999 28.2992 6.07685 28.0358C5.81342 27.7727 5.60443 27.4602 5.46185 27.1162C5.31926 26.7722 5.24587 26.4036 5.24587 26.0312C5.24587 25.6589 5.31926 25.2902 5.46185 24.9462C5.60443 24.6022 5.81342 24.2898 6.07685 24.0266L6.16185 23.9416C6.48844 23.6077 6.70753 23.1837 6.79086 22.7241C6.87418 22.2646 6.81793 21.7906 6.62935 21.3633C6.44977 20.9443 6.15159 20.5869 5.77151 20.3352C5.39143 20.0835 4.94605 19.9484 4.49018 19.9466H4.24935C3.4979 19.9466 2.77723 19.6481 2.24588 19.1168C1.71453 18.5854 1.41602 17.8647 1.41602 17.1133C1.41602 16.3618 1.71453 15.6412 2.24588 15.1098C2.77723 14.5785 3.4979 14.28 4.24935 14.28H4.37685C4.84576 14.269 5.30052 14.1172 5.68202 13.8443C6.06352 13.5715 6.35411 13.1902 6.51602 12.75C6.7046 12.3227 6.76085 11.8487 6.67752 11.3891C6.5942 10.9296 6.37511 10.5055 6.04852 10.1716L5.96352 10.0866C5.70008 9.82349 5.4911 9.511 5.34851 9.16704C5.20593 8.82308 5.13254 8.45439 5.13254 8.08204C5.13254 7.7097 5.20593 7.34101 5.34851 6.99704C5.4911 6.65308 5.70008 6.3406 5.96352 6.07746C6.22666 5.81403 6.53914 5.60504 6.8831 5.46246C7.22706 5.31987 7.59575 5.24648 7.9681 5.24648C8.34044 5.24648 8.70914 5.31987 9.0531 5.46246C9.39706 5.60504 9.70954 5.81403 9.97268 6.07746L10.0577 6.16246C10.3916 6.48905 10.8156 6.70814 11.2752 6.79147C11.7347 6.87479 12.2087 6.81854 12.636 6.62996H12.7493C13.1684 6.45038 13.5257 6.1522 13.7774 5.77212C14.0291 5.39204 14.1642 4.94666 14.166 4.49079V4.24996C14.166 3.49851 14.4645 2.77784 14.9959 2.24649C15.5272 1.71514 16.2479 1.41663 16.9993 1.41663C17.7508 1.41663 18.4715 1.71514 19.0028 2.24649C19.5342 2.77784 19.8327 3.49851 19.8327 4.24996V4.37746C19.8345 4.83332 19.9696 5.27871 20.2213 5.65879C20.473 6.03886 20.8303 6.33704 21.2493 6.51663C21.6766 6.70521 22.1506 6.76146 22.6102 6.67813C23.0697 6.59481 23.4938 6.37572 23.8277 6.04913L23.9127 5.96413C24.1758 5.70069 24.4883 5.49171 24.8323 5.34912C25.1762 5.20654 25.5449 5.13315 25.9173 5.13315C26.2896 5.13315 26.6583 5.20654 27.0023 5.34912C27.3462 5.49171 27.6587 5.70069 27.9218 5.96413C28.1853 6.22727 28.3943 6.53975 28.5369 6.88371C28.6794 7.22767 28.7528 7.59637 28.7528 7.96871C28.7528 8.34105 28.6794 8.70975 28.5369 9.05371C28.3943 9.39767 28.1853 9.71015 27.9218 9.97329L27.8368 10.0583C27.5103 10.3922 27.2912 10.8162 27.2078 11.2758C27.1245 11.7354 27.1808 12.2093 27.3693 12.6366V12.75C27.5489 13.169 27.8471 13.5263 28.2272 13.778C28.6073 14.0297 29.0527 14.1648 29.5085 14.1666H29.7493C30.5008 14.1666 31.2215 14.4651 31.7528 14.9965C32.2842 15.5278 32.5827 16.2485 32.5827 17C32.5827 17.7514 32.2842 18.4721 31.7528 19.0034C31.2215 19.5348 30.5008 19.8333 29.7493 19.8333H29.6218C29.166 19.8351 28.7206 19.9702 28.3405 20.2219C27.9604 20.4736 27.6623 20.831 27.4827 21.25Z"
                    stroke="#1E1E1E"
                    stroke-width="3"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </g>
                <defs>
                  <clipPath id="clip0_2355_511">
                    <rect width="34" height="34" fill="white" />
                  </clipPath>
                </defs>
              </svg>
            </a>
          </div>
          <div
            class="iconborder size-12 hover:bg-main-purple hover:cursor-pointer hover:shadow-xl rounded-lg transition duration-300 ease-in-out"
          >
            <a href="#" class="w-full h-full flex justify-center items-center">
              <svg
                width="28"
                height="28"
                viewBox="0 0 34 34"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M17.0007 11.3333V17M17.0007 22.6666H17.0148M31.1673 17C31.1673 24.824 24.8247 31.1666 17.0007 31.1666C9.17662 31.1666 2.83398 24.824 2.83398 17C2.83398 9.17595 9.17662 2.83331 17.0007 2.83331C24.8247 2.83331 31.1673 9.17595 31.1673 17Z"
                  stroke="#1E1E1E"
                  stroke-width="3"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </a>
          </div>
          <div
            class="iconborder size-12 hover:bg-main-purple hover:cursor-pointer hover:shadow-xl rounded-lg transition duration-300 ease-in-out mt-52"
          >
            <a href="#" class="w-full h-full flex justify-center items-center">
              <svg
                width="28"
                height="28"
                viewBox="0 0 34 34"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M29.7506 18.1192C29.5277 20.5306 28.6227 22.8287 27.1414 24.7446C25.6602 26.6605 23.6639 28.1149 21.3862 28.9376C19.1085 29.7603 16.6436 29.9173 14.2799 29.3903C11.9162 28.8633 9.7515 27.6739 8.03908 25.9615C6.32666 24.2491 5.13734 22.0844 4.6103 19.7207C4.08325 17.357 4.24027 14.8921 5.06299 12.6144C5.88571 10.3367 7.3401 8.34044 9.25598 6.85915C11.1719 5.37786 13.47 4.47285 15.8814 4.25C14.4696 6.16005 13.7902 8.51339 13.9668 10.882C14.1435 13.2506 15.1644 15.4772 16.8439 17.1567C18.5234 18.8362 20.75 19.8571 23.1186 20.0337C25.4872 20.2104 27.8405 19.531 29.7506 18.1192Z"
                  stroke="#000000"
                  stroke-width="3"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </a>
          </div>
          <div
            class="iconborder size-12 hover:bg-main-purple hover:cursor-pointer hover:shadow-xl rounded-lg transition duration-300 ease-in-out"
          >
            <a href="#" class="w-full h-full flex justify-center items-center">
              <div class="bg-gray-500 w-7 h-7 rounded-full"></div>
            </a>
          </div>
        </div>
      </div>
      <div
        id="sidebar"
        class="fixed top-0 left-0 bg-white h-full w-80 shadow-lg z-10 overflow-y-auto hidden"
      >
        <div class="flex justify-end items-center px-10 mt-5 w-full">
          <div
            class="iconborder flex justify-center items-center size-11 mr-5 hover:bg-main-purple hover:shadow-xl rounded-lg cursor-pointer transition duration-300 ease-in-out"
          >
            <svg
              class="bell"
              width="22"
              height="22"
              viewBox="0 0 34 34"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M19.4508 29.75C19.2018 30.1794 18.8443 30.5358 18.4142 30.7835C17.984 31.0313 17.4964 31.1617 17 31.1617C16.5036 31.1617 16.016 31.0313 15.5858 30.7835C15.1557 30.5358 14.7982 30.1794 14.5492 29.75M25.5 11.3333C25.5 9.079 24.6045 6.91699 23.0104 5.32294C21.4163 3.72888 19.2543 2.83334 17 2.83334C14.7457 2.83334 12.5837 3.72888 10.9896 5.32294C9.39553 6.91699 8.5 9.079 8.5 11.3333C8.5 21.25 4.25 24.0833 4.25 24.0833H29.75C29.75 24.0833 25.5 21.25 25.5 11.3333Z"
                stroke="#1E1E1E"
                stroke-width="3"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
          </div>
          <div
            id="nav-colaspe"
            class="iconborder flex justify-center items-center size-11 hover:bg-main-purple hover:shadow-xl rounded-lg cursor-pointer transition duration-300 ease-in-out"
            onclick="toggleNav()"
          >
            <svg
              width="22"
              height="22"
              viewBox="0 0 34 34"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M4.25 17H29.75M4.25 8.5H29.75M4.25 25.5H29.75"
                stroke="#1E1E1E"
                stroke-width="4"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
          </div>
        </div>
        <div class="flex justify-center items-center mt-4 px-5">
          <div class="relative">
            <svg
              class="absolute ml-3 pointer-events-none"
              style="margin-top: 0.68rem"
              width="20"
              height="20"
              viewBox="0 0 34 34"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <rect width="20" height="20" fill="none" />
              <path
                d="M29.75 29.75L23.5875 23.5875M26.9167 15.5833C26.9167 21.8426 21.8426 26.9167 15.5833 26.9167C9.32411 26.9167 4.25 21.8426 4.25 15.5833C4.25 9.32411 9.32411 4.25 15.5833 4.25C21.8426 4.25 26.9167 9.32411 26.9167 15.5833Z"
                stroke="#ffffff"
                stroke-width="4"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
            <input
              class="shadow appearance-none border rounded-xl w-full h-10 py-2 px-10 text-nav-purple placeholder-white leading-tight focus:outline-none focus:shadow-outline bg-main-purple"
              type="text"
              placeholder="Search"
            />
          </div>
        </div>
        <div class="flex flex-col w-full h-full px-5 mt-10">
          <div
            class="iconborder w-full h-11 hover:bg-main-purple hover:cursor-pointer hover:shadow-xl rounded-lg transition duration-300 ease-in-out"
          >
            <a href="./home.html" class="w-full h-full">
              <div
                class="w-full h-full hover:text-white px-2 flex items-center justify-start transition duration-200 ease-in-out"
              >
                <svg
                  width="28"
                  height="28"
                  viewBox="0 0 34 34"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M12.75 31.1666V17H21.25V31.1666M4.25 12.75L17 2.83331L29.75 12.75V28.3333C29.75 29.0848 29.4515 29.8054 28.9201 30.3368C28.3888 30.8681 27.6681 31.1666 26.9167 31.1666H7.08333C6.33189 31.1666 5.61122 30.8681 5.07986 30.3368C4.54851 29.8054 4.25 29.0848 4.25 28.3333V12.75Z"
                    stroke="#1E1E1E"
                    stroke-width="3"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
                <div
                  class="font-roboto text-xl px-10 font-medium transition-none"
                  style="padding-top: 0.15rem"
                >
                  Home
                </div>
              </div>
            </a>
          </div>
          <div
            class="iconborder w-full h-11 hover:bg-main-purple hover:cursor-pointer hover:shadow-xl rounded-lg mt-10 transition duration-300 ease-in-out"
          >
            <a href="./viewAnalytics.html" class="w-full h-full">
              <div
                class="w-full h-full flex items-center px-2 justify-start hover:text-white transition duration-200 ease-in-out"
              >
                <svg
                  width="28"
                  height="28"
                  viewBox="0 0 34 34"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M30.0468 22.5108C29.1455 24.6422 27.7359 26.5203 25.9411 27.981C24.1463 29.4417 22.021 30.4405 19.7511 30.8901C17.4811 31.3397 15.1355 31.2263 12.9195 30.56C10.7034 29.8937 8.68432 28.6947 7.03871 27.0677C5.39311 25.4408 4.17109 23.4355 3.4795 21.2272C2.78791 19.0189 2.64781 16.6748 3.07145 14.3999C3.49508 12.1249 4.46955 9.98837 5.90967 8.17702C7.34978 6.36567 9.21169 4.93468 11.3326 4.00915M31.1659 17C31.1659 15.1396 30.7995 13.2974 30.0876 11.5786C29.3756 9.85985 28.3321 8.29813 27.0166 6.98263C25.7011 5.66714 24.1394 4.62363 22.4206 3.91169C20.7018 3.19974 18.8597 2.83331 16.9993 2.83331V17H31.1659Z"
                    stroke="#1E1E1E"
                    stroke-width="3"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>

                <div
                  class="font-roboto text-xl px-10 font-medium"
                  style="padding-top: 0.15rem"
                >
                  View Analytics
                </div>
              </div>
            </a>
          </div>
          <div
            class="iconborder w-full h-11 hover:bg-main-purple hover:cursor-pointer hover:shadow-xl rounded-lg mt-10 transition duration-300 ease-in-out"
          >
            <a href="./addClub.html" class="w-full h-full">
              <div
                class="w-full h-full hover:text-white px-2 flex items-center justify-start transition duration-200 ease-in-out"
              >
                <svg
                  width="28"
                  height="28"
                  viewBox="0 0 34 34"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M19.8327 2.83331H8.49935C7.7479 2.83331 7.02723 3.13182 6.49588 3.66318C5.96453 4.19453 5.66602 4.9152 5.66602 5.66665V28.3333C5.66602 29.0848 5.96453 29.8054 6.49588 30.3368C7.02723 30.8681 7.7479 31.1666 8.49935 31.1666H25.4994C26.2508 31.1666 26.9715 30.8681 27.5028 30.3368C28.0342 29.8054 28.3327 29.0848 28.3327 28.3333V11.3333M19.8327 2.83331L28.3327 11.3333M19.8327 2.83331V11.3333H28.3327M16.9993 25.5V17M12.7493 21.25H21.2493"
                    stroke="#1E1E1E"
                    stroke-width="3"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
                <div
                  class="font-roboto text-xl px-10 font-medium"
                  style="padding-top: 0.15rem"
                >
                  Add Club
                </div>
              </div>
            </a>
          </div>
          <div
            id="loginSignup"
            class="iconborder w-full h-11 hover:bg-main-purple hover:cursor-pointer hover:shadow-xl rounded-lg mt-10 transition duration-300 ease-in-out"
          >
            <div
              class="w-full h-full hover:text-white px-2 flex items-center justify-start transition duration-200 ease-in-out"
            >
              <svg
                width="28"
                height="28"
                viewBox="0 0 34 34"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M21.25 4.25H26.9167C27.6681 4.25 28.3888 4.54851 28.9201 5.07986C29.4515 5.61122 29.75 6.33189 29.75 7.08333V26.9167C29.75 27.6681 29.4515 28.3888 28.9201 28.9201C28.3888 29.4515 27.6681 29.75 26.9167 29.75H21.25M14.1667 24.0833L21.25 17M21.25 17L14.1667 9.91667M21.25 17H4.25"
                  stroke="#1E1E1E"
                  stroke-width="3"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
              <div
                class="font-roboto text-xl px-10 font-medium"
                style="padding-top: 0.15rem"
              >
                Login/Signup
              </div>
            </div>
          </div>
          <div id="accordionContent" class="hidden">
            <div
              class="p-4 bg-gray-200 rounded-lg flex flex-col gap-3 justify-center items-center transition duration-300 ease-in-out"
            >
              <a
                class="text-lg w-full flex justify-center items-center hover:bg-gray-100 rounded-md"
                href="./index.html"
                >Sign Up</a
              >
              <a
                class="text-lg w-full flex justify-center items-center hover:bg-gray-100 rounded-md"
                href="./login.html"
                >Log In</a
              >
            </div>
          </div>
          <div
            class="iconborder w-full h-11 hover:bg-main-purple hover:cursor-pointer hover:shadow-xl rounded-lg mt-10 transition duration-300 ease-in-out"
          >
            <a href="./settings.html" class="w-full h-full">
              <div
                class="w-full h-full hover:text-white px-2 flex items-center justify-start transition duration-200 ease-in-out"
              >
                <svg
                  width="28"
                  height="28"
                  viewBox="0 0 34 34"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <g clip-path="url(#clip0_2355_511)">
                    <path
                      d="M16.9993 21.25C19.3466 21.25 21.2493 19.3472 21.2493 17C21.2493 14.6527 19.3466 12.75 16.9993 12.75C14.6521 12.75 12.7493 14.6527 12.7493 17C12.7493 19.3472 14.6521 21.25 16.9993 21.25Z"
                      stroke="#1E1E1E"
                      stroke-width="3"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                    <path
                      d="M27.4827 21.25C27.2941 21.6772 27.2378 22.1512 27.3212 22.6108C27.4045 23.0704 27.6236 23.4944 27.9502 23.8283L28.0352 23.9133C28.2986 24.1764 28.5076 24.4889 28.6502 24.8329C28.7928 25.1768 28.8662 25.5455 28.8662 25.9179C28.8662 26.2902 28.7928 26.6589 28.6502 27.0029C28.5076 27.3468 28.2986 27.6593 28.0352 27.9225C27.772 28.1859 27.4596 28.3949 27.1156 28.5375C26.7716 28.68 26.4029 28.7534 26.0306 28.7534C25.6583 28.7534 25.2896 28.68 24.9456 28.5375C24.6016 28.3949 24.2892 28.1859 24.026 27.9225L23.941 27.8375C23.6071 27.5109 23.1831 27.2918 22.7235 27.2085C22.264 27.1251 21.79 27.1814 21.3627 27.37C20.9437 27.5495 20.5863 27.8477 20.3346 28.2278C20.0829 28.6079 19.9478 29.0533 19.946 29.5091V29.75C19.946 30.5014 19.6475 31.2221 19.1162 31.7534C18.5848 32.2848 17.8641 32.5833 17.1127 32.5833C16.3612 32.5833 15.6406 32.2848 15.1092 31.7534C14.5779 31.2221 14.2793 30.5014 14.2793 29.75V29.6225C14.2684 29.1535 14.1166 28.6988 13.8437 28.3173C13.5709 27.9358 13.1896 27.6452 12.7493 27.4833C12.3221 27.2947 11.8481 27.2385 11.3885 27.3218C10.929 27.4051 10.5049 27.6242 10.171 27.9508L10.086 28.0358C9.82287 28.2992 9.51039 28.5082 9.16643 28.6508C8.82247 28.7934 8.45378 28.8668 8.08143 28.8668C7.70909 28.8668 7.3404 28.7934 6.99643 28.6508C6.65247 28.5082 6.33999 28.2992 6.07685 28.0358C5.81342 27.7727 5.60443 27.4602 5.46185 27.1162C5.31926 26.7722 5.24587 26.4036 5.24587 26.0312C5.24587 25.6589 5.31926 25.2902 5.46185 24.9462C5.60443 24.6022 5.81342 24.2898 6.07685 24.0266L6.16185 23.9416C6.48844 23.6077 6.70753 23.1837 6.79086 22.7241C6.87418 22.2646 6.81793 21.7906 6.62935 21.3633C6.44977 20.9443 6.15159 20.5869 5.77151 20.3352C5.39143 20.0835 4.94605 19.9484 4.49018 19.9466H4.24935C3.4979 19.9466 2.77723 19.6481 2.24588 19.1168C1.71453 18.5854 1.41602 17.8647 1.41602 17.1133C1.41602 16.3618 1.71453 15.6412 2.24588 15.1098C2.77723 14.5785 3.4979 14.28 4.24935 14.28H4.37685C4.84576 14.269 5.30052 14.1172 5.68202 13.8443C6.06352 13.5715 6.35411 13.1902 6.51602 12.75C6.7046 12.3227 6.76085 11.8487 6.67752 11.3891C6.5942 10.9296 6.37511 10.5055 6.04852 10.1716L5.96352 10.0866C5.70008 9.82349 5.4911 9.511 5.34851 9.16704C5.20593 8.82308 5.13254 8.45439 5.13254 8.08204C5.13254 7.7097 5.20593 7.34101 5.34851 6.99704C5.4911 6.65308 5.70008 6.3406 5.96352 6.07746C6.22666 5.81403 6.53914 5.60504 6.8831 5.46246C7.22706 5.31987 7.59575 5.24648 7.9681 5.24648C8.34044 5.24648 8.70914 5.31987 9.0531 5.46246C9.39706 5.60504 9.70954 5.81403 9.97268 6.07746L10.0577 6.16246C10.3916 6.48905 10.8156 6.70814 11.2752 6.79147C11.7347 6.87479 12.2087 6.81854 12.636 6.62996H12.7493C13.1684 6.45038 13.5257 6.1522 13.7774 5.77212C14.0291 5.39204 14.1642 4.94666 14.166 4.49079V4.24996C14.166 3.49851 14.4645 2.77784 14.9959 2.24649C15.5272 1.71514 16.2479 1.41663 16.9993 1.41663C17.7508 1.41663 18.4715 1.71514 19.0028 2.24649C19.5342 2.77784 19.8327 3.49851 19.8327 4.24996V4.37746C19.8345 4.83332 19.9696 5.27871 20.2213 5.65879C20.473 6.03886 20.8303 6.33704 21.2493 6.51663C21.6766 6.70521 22.1506 6.76146 22.6102 6.67813C23.0697 6.59481 23.4938 6.37572 23.8277 6.04913L23.9127 5.96413C24.1758 5.70069 24.4883 5.49171 24.8323 5.34912C25.1762 5.20654 25.5449 5.13315 25.9173 5.13315C26.2896 5.13315 26.6583 5.20654 27.0023 5.34912C27.3462 5.49171 27.6587 5.70069 27.9218 5.96413C28.1853 6.22727 28.3943 6.53975 28.5369 6.88371C28.6794 7.22767 28.7528 7.59637 28.7528 7.96871C28.7528 8.34105 28.6794 8.70975 28.5369 9.05371C28.3943 9.39767 28.1853 9.71015 27.9218 9.97329L27.8368 10.0583C27.5103 10.3922 27.2912 10.8162 27.2078 11.2758C27.1245 11.7354 27.1808 12.2093 27.3693 12.6366V12.75C27.5489 13.169 27.8471 13.5263 28.2272 13.778C28.6073 14.0297 29.0527 14.1648 29.5085 14.1666H29.7493C30.5008 14.1666 31.2215 14.4651 31.7528 14.9965C32.2842 15.5278 32.5827 16.2485 32.5827 17C32.5827 17.7514 32.2842 18.4721 31.7528 19.0034C31.2215 19.5348 30.5008 19.8333 29.7493 19.8333H29.6218C29.166 19.8351 28.7206 19.9702 28.3405 20.2219C27.9604 20.4736 27.6623 20.831 27.4827 21.25Z"
                      stroke="#1E1E1E"
                      stroke-width="3"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                  </g>
                  <defs>
                    <clipPath id="clip0_2355_511">
                      <rect width="34" height="34" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
                <div
                  class="font-roboto text-xl px-10 font-medium"
                  style="padding-top: 0.15rem"
                >
                  Settings
                </div>
              </div>
            </a>
          </div>
          <div
            class="iconborder w-full h-11 hover:bg-main-purple hover:cursor-pointer hover:shadow-xl rounded-lg mt-10 transition duration-300 ease-in-out"
          >
            <a href="./about.html" class="w-full h-full">
              <div
                class="w-full h-full hover:text-white px-2 flex items-center justify-start transition duration-200 ease-in-out"
              >
                <svg
                  width="28"
                  height="28"
                  viewBox="0 0 34 34"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M17.0007 11.3333V17M17.0007 22.6666H17.0148M31.1673 17C31.1673 24.824 24.8247 31.1666 17.0007 31.1666C9.17662 31.1666 2.83398 24.824 2.83398 17C2.83398 9.17595 9.17662 2.83331 17.0007 2.83331C24.8247 2.83331 31.1673 9.17595 31.1673 17Z"
                    stroke="#1E1E1E"
                    stroke-width="3"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>

                <div
                  class="font-roboto text-xl px-10 font-medium"
                  style="padding-top: 0.15rem"
                >
                  About
                </div>
              </div>
            </a>
          </div>
          <div
            class="w-full h-20 px-4 flex items-center justify-start bg-main-purple rounded-lg mt-32 hover:shadow-xl transition-shadow duration-300"
          >
            <svg
              width="28"
              height="28"
              viewBox="0 0 34 34"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M29.7506 18.1192C29.5277 20.5306 28.6227 22.8287 27.1414 24.7446C25.6602 26.6605 23.6639 28.1149 21.3862 28.9376C19.1085 29.7603 16.6436 29.9173 14.2799 29.3903C11.9162 28.8633 9.7515 27.6739 8.03908 25.9615C6.32666 24.2491 5.13734 22.0844 4.6103 19.7207C4.08325 17.357 4.24027 14.8921 5.06299 12.6144C5.88571 10.3367 7.3401 8.34044 9.25598 6.85915C11.1719 5.37786 13.47 4.47285 15.8814 4.25C14.4696 6.16005 13.7902 8.51339 13.9668 10.882C14.1435 13.2506 15.1644 15.4772 16.8439 17.1567C18.5234 18.8362 20.75 19.8571 23.1186 20.0337C25.4872 20.2104 27.8405 19.531 29.7506 18.1192Z"
                stroke="#ffffff"
                stroke-width="3"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
            <div
              class="font-roboto text-normal px-5 font-light text-white w-36"
              style="padding-top: 0.15rem"
            >
              Switch to Dark Mode
            </div>
            <label class="inline-flex items-center cursor-pointer">
              <input type="checkbox" value="" class="sr-only peer" />
              <div
                class="relative w-11 h-5 bg-gray-200 peer-focus:outline-none dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-6 rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"
              ></div>
            </label>
          </div>
          <div
            class="w-full h-20 px-4 flex items-center justify-start bg-gray-100 rounded-lg mt-5 hover:cursor-pointer hover:shadow-lg transition-shadow duration-300"
          >
            <div class="bg-gray-600 rounded-full size-12"></div>
            <a
              class="font-roboto text-sm px-5 font-light"
              style="padding-top: 0.15rem"
              href="./account.html"
            >
              Sign In to view Account
            </a>
            <span class="material-symbols-outlined"> chevron_right </span>
          </div>
        </div>
      </div>
      <div class="flex justify-center items-center h-screen">
       <form action="./signup.php" method="POST">
        <div
        id="animatedDiv"
        class="bg-white grid grid-cols-2 rounded-xl shadow-lg relative animate-width"
        style="width: 10vw; height: 700px"
        >
        <div
          class="col-start-1 grid grid-rows-2"
          style="grid-template-rows: 70% 30%"
        >
          <div
            class="row-start-1 w-full h-full flex flex-col justify-center items-center gap-10"
          >
            <div class="w-full px-7 fade-in">
              <label
                class="text-lg font-roboto text-black tracking-widest pl-1"
                >Email</label
              ><br />
              <div class="relative">
                <span
                  class="material-symbols-outlined absolute mt-3 ml-3 pointer-events-none"
                >
                  mail
                </span>
                <input
                  class="shadow appearance-none border rounded-xl w-full h-12 py-2 px-10 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                  id="email"
                  name="email"
                  type="email"
                  placeholder="Something@user.com"
                />
              </div>
            </div>
            <div class="w-full flex justify-center items-center fade-in">
              <div class="w-full pl-7 pr-2">
                <label
                  class="text-lg font-roboto text-black tracking-widest pl-1"
                  >First Name</label
                ><br />
                <div class="relative">
                  <span class="material-symbols-outlined absolute mt-3 ml-3">
                    person
                  </span>
                  <input
                    class="shadow appearance-none border rounded-xl w-full h-12 py-2 px-10 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="firstname"
                    name="firstname"
                    type="text"
                    placeholder="First Name"
                  />
                </div>
              </div>
              <div class="w-full pr-7 pl-2 fade-in">
                <label
                  class="text-lg font-roboto text-black tracking-widest pl-1"
                  >Last Name</label
                ><br />
                <div class="relative">
                  <span
                    class="material-symbols-outlined absolute mt-3 ml-3 pointer-events-none"
                  >
                    person
                  </span>
                  <input
                    class="shadow appearance-none border rounded-xl w-full h-12 py-2 px-10 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="lastname"
                    name="lastname"
                    type="text"
                    placeholder="Last Name"
                  />
                </div>
              </div>
            </div>
            <div class="w-full px-7 fade-in">
              <label
                class="text-lg font-roboto text-black tracking-widest pl-1"
                >Phone Number</label
              ><br />
              <div class="relative">
                <span class="material-symbols-outlined absolute mt-3 ml-3">
                  id_card
                </span>
                <input
                  class="shadow appearance-none border rounded-xl w-full h-12 py-2 px-10 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                  id="phone"
                  name="phone"
                  type="text"
                  placeholder="Phone Number"
                />
              </div>
            </div>
            <div class="w-full px-7 fade-in">
              <label
                class="text-lg font-roboto text-black tracking-widest pl-1"
                >Password</label
              ><br />
              <div class="relative">
                <span
                  class="material-symbols-outlined absolute mt-3 ml-3 pointer-events-none"
                >
                  key
                </span>
                <input
                  class="shadow appearance-none border rounded-xl w-full h-12 py-2 px-10 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                  id="password"
                  name="password"
                  type="password"
                  placeholder="Password"
                />
              </div>
            </div>
          </div>
          <div
            class="row-start-2 w-full h-full flex justify-center items-center pb-10"
          >
            <button
              class="font-roboto text-3xl bg-main-purple text-white rounded-xl hover:bg-main-purple-shade hover:shadow-md fade-in transition duration-300 ease-in-out"
              style="width: 13.5rem; height: 3.5rem"
              name="submit"
              type="submit"
            >
            Sign Up
            </button>
          </div>
        </div>
      </form>
        <div
          class="col-start-2 bg-gradient-to-tl from-main-purple to-main-blue rounded-xl h-full w-full"
        >
          <div
            class="col-start-2 spacer bubble pointer-events-none fade-in-left"
          ></div>
          <div
            class="grid grid-rows-2 w-full h-full"
            style="grid-template-rows: 70% 30%"
          >
            <div
              class="row-start-1 flex flex-col justify-center items-center px-14 mt-24"
            >
              <div
                class="font-bold text-white fade-in-left"
                style="font-size: 6.5rem; line-height: 1"
              >
                Already Have an Account?
              </div>
            </div>
            <div
              class="row-start-2 w-full h-full flex justify-center items-center pb-10"
              style="z-index: 3"
            >
              <button
                class="font-roboto text-3xl bg-white text-main-blue rounded-xl hover:bg-gray-100 hover:shadow-md fade-in-left transition duration-300 ease-in-out"
                style="width: 13.5rem; height: 3.5rem"
              >
              <a href="./login.html" class="w-full h-full flex items-center justify-center">Log In</a>     
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </body>
  <script>
    window.addEventListener("load", () => {
      const animatedDiv = document.getElementById("animatedDiv");
      animatedDiv.style.width = "57.55vw";
    });
  </script>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      var accordionContent = document.getElementById("accordionContent");
      var sidebar = document.getElementById("sidebar");

      // Ensure the overflow-y-auto class is not applied initially
      sidebar.classList.remove("overflow-y-auto");

      document
        .getElementById("loginSignup")
        .addEventListener("click", function () {
          accordionContent.classList.toggle("hidden");

          // Toggle overflow-y-auto class on the sidebar
          if (!accordionContent.classList.contains("hidden")) {
            sidebar.classList.add("overflow-y-auto");
          } else {
            sidebar.classList.remove("overflow-y-auto");
          }
        });
    });
  </script>
  <script>
    function toggleNav() {
      const nav = document.querySelector(
        ".fixed.top-0.left-0.bg-white.h-full.w-20"
      );
      const sidebar = document.getElementById("sidebar");
      nav.classList.toggle("hidden");
      sidebar.classList.toggle("hidden");
    }
  </script>
</html>