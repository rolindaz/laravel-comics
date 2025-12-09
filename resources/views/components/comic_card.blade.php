<div className="col d-flex flex-column gap-3" key={props.uniqueKey}>
            <div className='thumbnail'>
                <img className="w-100 h-100 d-block object-fit-cover" src={props.src} alt={props.alt} />
            </div>
            <span className='d- block text-uppercase text-white fw-normal text-start w-100'>
                {props.spanContent}
            </span>
        </div>